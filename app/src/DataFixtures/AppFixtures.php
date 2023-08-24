<?php

namespace App\DataFixtures;

use App\Entity\Address;
use App\Entity\AddressDistributionPoint;
use App\Entity\AddressLocationOption;
use App\Entity\BillingOption;
use App\Entity\Contract;
use App\Entity\ContractPersonalAccountOption;
use App\Entity\ConversionRatio;
use App\Entity\Currency;
use App\Entity\Customer;
use App\Entity\CustomerLegalEntityOption;
use App\Entity\CustomerNaturalPersonOption;
use App\Entity\DeviceModelScale;
use App\Entity\DeviceOption;
use App\Entity\DistributionPoint;
use App\Entity\Distributor;
use App\Entity\LegalEntity;
use App\Entity\LegalEntityBillingOption;
use App\Entity\LegalEntityOption;
use App\Entity\LocationBillingOption;
use App\Entity\LocationOption;
use App\Entity\MeasuringScale;
use App\Entity\MeteringDevice;
use App\Entity\MeteringDeviceModel;
use App\Entity\MeteringDeviceModelProduct;
use App\Entity\MeteringPoint;
use App\Entity\NaturalPerson;
use App\Entity\NaturalPersonBillingOption;
use App\Entity\NaturalPersonOption;
use App\Entity\NumberDeviceOptionMeteringDeviceModel;
use App\Entity\PersonalAccount;
use App\Entity\PersonalAccountBillingOption;
use App\Entity\PersonalAccountOption;
use App\Entity\PersonalAccountShare;
use App\Entity\Product;
use App\Entity\ProductDistributor;
use App\Entity\ProductPersonalAccount;
use App\Entity\ProductUnitsOfMeasure;
use App\Entity\RawReadings;
use App\Entity\ReadingsPurpose;
use App\Entity\ReadingsSender;
use App\Entity\ReadingsSenderReadingsWay;
use App\Entity\ReadingsWay;
use App\Entity\RelatedProduct;
use App\Entity\SharedProduct;
use App\Entity\TestingRule;
use App\Entity\TestingRuleSet;
use App\Entity\TestingSet;
use App\Entity\UnitsOfMeasure;
use DateInterval;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Exception;

class AppFixtures extends Fixture
{
    /**
     * @throws Exception
     */
    public function load(ObjectManager $manager): void
    {
        ## Install

        /** @var Product[] $products */
        $products = [];
        $productsWithDigitIndex = [];
        foreach (
            [
                'product1',
                'related_product1',
                'related_product2',
                'shared_product1',
                'shared_product2',
            ] as $code
        ) {
            $product = new Product();
            $product->setCode($code);

            $manager->persist($product);
            $products[$code] = $product;
            $productsWithDigitIndex[] = $product;
        }

        $obj = new RelatedProduct();
        $obj->setParent($products['related_product1']);
        $obj->setChild($products['related_product2']);
        $manager->persist($obj);

        $obj = new SharedProduct();
        $obj->setShared($products['shared_product1']);
        $obj->setIndividual($products['shared_product2']);
        $manager->persist($obj);

        /** @var UnitsOfMeasure[] $products */
        $units = [];
        foreach (
            [
                'units_of_measure1',
                'units_of_measure2',
                'currency1',
                'currency2',
            ] as $code
        ) {
            $unit = new UnitsOfMeasure();
            $unit->setCode($code);

            $manager->persist($unit);
            $units[$code] = $unit;
        }

        /** @var Currency[] $currencies */
        $currencies = [];
        foreach (
            [
                'currency1',
                'currency2',
            ] as $code
        ) {
            $currency = new Currency();
            $currency->setUnitsOfMeasure($units[$code]);

            $manager->persist($currency);
            $currencies[] = $currency;
        }

        $obj = new ConversionRatio();
        $obj->setSource($units['units_of_measure1']);
        $obj->setTarget($units['units_of_measure2']);
        $manager->persist($obj);

        $obj = new ConversionRatio();
        $obj->setSource($units['currency1']);
        $obj->setTarget($units['currency2']);
        $manager->persist($obj);

        /** @var ProductUnitsOfMeasure[] $productUnits */
        $productUnits = [];
        foreach (
            [
                'units_of_measure1',
                'units_of_measure2',
            ] as $code
        ) {
            foreach ($products as $product) {
                $productUnit = new ProductUnitsOfMeasure();
                $productUnit->setUnitsOfMeasure($units[$code]);
                $productUnit->setProduct($product);

                $manager->persist($productUnit);
                $productUnits[] = $productUnit;
            }
        }

        /** @var MeteringDeviceModel[] $models */
        $models = [];
        for ($i = 0; $i < 10; $i++) {
            $model = new MeteringDeviceModel();
            $model->setCode('model' . $i);

            $manager->persist($model);
            $models[] = $model;
        }

        $productsTotal = count($productsWithDigitIndex);
        /** @var MeteringDeviceModelProduct[] $modelsProduct */
        $modelsProduct = [];
        foreach ($models as $index => $model) {
            $productIndex = $index % $productsTotal;
            $product = $productsWithDigitIndex[$productIndex];

            $modelProduct = new MeteringDeviceModelProduct();
            $modelProduct->setModel($model);
            $modelProduct->setProduct($product);

            $manager->persist($modelProduct);
            $modelsProduct[] = $modelProduct;
        }

        /** @var DeviceOption[] $deviceOptions */
        $deviceOptions = [];
        for ($i = 0; $i < 2; $i++) {
            $option = new DeviceOption();
            $option->setCode('device_option' . $i);

            $manager->persist($option);
            $deviceOptions[] = $option;
        }

        foreach ($models as $model) {
            foreach ($deviceOptions as $option) {
                $numberOption = new NumberDeviceOptionMeteringDeviceModel();
                $numberOption->setModel($model);
                $numberOption->setDeviceOption($option);
                $numberOption->setNumberValue(random_int(-1, 999));

                $manager->persist($numberOption);
            }
        }

        /** @var ReadingsPurpose[] $readingsPurposes */
        $readingsPurposes = [];
        for ($i = 0; $i < count($modelsProduct) * 2; $i++) {
            $purpose = new ReadingsPurpose();
            $purpose->setCode('purpose' . $i);

            $manager->persist($purpose);
            $readingsPurposes[] = $purpose;
        }

        /** @var MeasuringScale[] $measuringScales */
        $measuringScales = [];
        for ($i = 0; $i < 3; $i++) {
            $scale = new MeasuringScale();
            $scale->setCode('scale' . $i);
            $scale->setReadingsLimit(random_int(999999, 999999999));
            $scale->setReadingsResolution(random_int(1, 9));

            $manager->persist($scale);
            $measuringScales[] = $scale;
        }

        $deviceScales = [];
        $unitsNumber = count($productUnits);
        /** @var DeviceModelScale[] $modelScales */
        $modelScales = [];
        $index = 0;
        $purposesTotal = count($readingsPurposes);
        foreach ($models as $model) {
            foreach ($measuringScales as $scale) {
                $modelScale = new DeviceModelScale();
                $modelScale->setModel($model);
                $modelScale->setScale($scale);

                $purposesIndex = $index % $purposesTotal;
                $modelScale->setPurpose($readingsPurposes[$purposesIndex]);

                $unitIndex = $index % $unitsNumber;
                $modelScale->setUnitsOfMeasure($productUnits[$unitIndex]->getUnitsOfMeasure());

                $manager->persist($modelScale);
                $modelScales[] = $modelScale;
                $deviceScales[$model->getId()][] = $modelScale;
            }

            $index++;
        }

        /** @var ReadingsSender[] $senders */
        $senders = [];
        for ($i = 0; $i < 2; $i++) {
            $sender = new ReadingsSender();
            $sender->setCode('sender' . $i);

            $manager->persist($sender);
            $senders[] = $sender;
        }

        /** @var ReadingsWay[] $ways */
        $ways = [];
        for ($i = 0; $i < 2; $i++) {
            $way = new ReadingsWay();
            $way->setCode('way' . $i);

            $manager->persist($way);
            $ways[] = $way;
        }

        /** @var ReadingsSenderReadingsWay[] $sendersWays */
        $sendersWays = [];
        foreach ($senders as $sender) {
            foreach ($ways as $way) {
                $senderWay = new ReadingsSenderReadingsWay();
                $senderWay->setSender($sender);
                $senderWay->setWay($way);

                $manager->persist($senderWay);
                $sendersWays[] = $senderWay;
            }
        }

        /** @var TestingSet[] $testingSets */
        $testingSets = [];
        for ($i = 0; $i < 4; $i++) {
            $testingSet = new TestingSet();
            $testingSet->setCode('set' . $i);

            $manager->persist($testingSet);
            $testingSets[] = $testingSet;
        }

        /** @var TestingRule[] $testingRules */
        $testingRules = [];
        for ($i = 0; $i < 10; $i++) {
            $testingRule = new TestingRule();
            $testingRule->setCode('rule' . $i);

            $manager->persist($testingRule);
            $testingRules[] = $testingRule;
        }

        /** @var TestingRuleSet[] $ruleSets */
        $ruleSets = [];
        foreach ($testingSets as $set) {
            foreach ($testingRules as $rule) {
                $ruleSet = new TestingRuleSet();
                $ruleSet->setTestingSet($set);
                $ruleSet->setRule($rule);

                $manager->persist($ruleSet);
                $ruleSets[] = $ruleSet;
            }
        }

        /** @var LocationOption[] $locationOptions */
        $locationOptions = [];
        for ($i = 0; $i < 4; $i++) {
            $option = new LocationOption();
            $option->setCode('location_option' . $i);

            $manager->persist($option);
            $locationOptions[] = $option;
        }

        /** @var PersonalAccountOption[] $accountOptions */
        $accountOptions = [];
        for ($i = 0; $i < 4; $i++) {
            $option = new PersonalAccountOption();
            $option->setCode('personal_account_option' . $i);

            $manager->persist($option);
            $accountOptions[] = $option;
        }

        /** @var LegalEntityOption[] $legalOptions */
        $legalOptions = [];
        for ($i = 0; $i < 4; $i++) {
            $option = new LegalEntityOption();
            $option->setCode('legal_entity_option' . $i);

            $manager->persist($option);
            $legalOptions[] = $option;
        }

        /** @var NaturalPersonOption[] $naturalOptions */
        $naturalOptions = [];
        for ($i = 0; $i < 4; $i++) {
            $option = new NaturalPersonOption();
            $option->setCode('natural_person_option' . $i);

            $manager->persist($option);
            $naturalOptions[] = $option;
        }

        /** @var BillingOption[] $billingOptions */
        $billingOptions = [];

        /** @var LocationBillingOption[] $locationBillingOptions */
        $locationBillingOptions = [];
        foreach ($locationOptions as $option) {
            $billingOption = new BillingOption();
            $code = $option->getCode();
            $billingOption->setCode($code);

            $manager->persist($billingOption);
            $billingOptions[$code] = $billingOption;

            $mapping = new LocationBillingOption();
            $mapping->setBillingOption($billingOption);
            $mapping->setLocationOption($option);

            $manager->persist($mapping);
            $locationBillingOptions[] = $mapping;
        }

        /** @var PersonalAccountBillingOption[] $accountBillingOptions */
        $accountBillingOptions = [];
        foreach ($accountOptions as $option) {
            $billingOption = new BillingOption();
            $code = $option->getCode();
            $billingOption->setCode($code);

            $manager->persist($billingOption);
            $billingOptions[$code] = $billingOption;

            $mapping = new PersonalAccountBillingOption();
            $mapping->setBillingOption($billingOption);
            $mapping->setAccountOption($option);

            $manager->persist($mapping);
            $accountBillingOptions[] = $mapping;
        }

        /** @var LegalEntityBillingOption[] $entityBillingOptions */
        $entityBillingOptions = [];
        foreach ($legalOptions as $option) {
            $billingOption = new BillingOption();
            $code = $option->getCode();
            $billingOption->setCode($code);

            $manager->persist($billingOption);
            $billingOptions[$code] = $billingOption;

            $mapping = new LegalEntityBillingOption();
            $mapping->setBillingOption($billingOption);
            $mapping->setEntityOption($option);

            $manager->persist($mapping);
            $entityBillingOptions[] = $mapping;
        }

        /** @var NaturalPersonBillingOption[] $personBillingOptions */
        $personBillingOptions = [];
        foreach ($naturalOptions as $option) {
            $billingOption = new BillingOption();
            $code = $option->getCode();
            $billingOption->setCode($code);

            $manager->persist($billingOption);
            $billingOptions[$code] = $billingOption;

            $mapping = new NaturalPersonBillingOption();
            $mapping->setBillingOption($billingOption);
            $mapping->setPersonOption($option);

            $manager->persist($mapping);
            $personBillingOptions[] = $mapping;
        }

        ## Setup

        /** @var Distributor[] $distributors */
        $distributors = [];
        for ($i = 0; $i < 2; $i++) {
            $distributor = new Distributor();
            $distributor->setCode('distributor' . $i);

            $manager->persist($distributor);
            $distributors[] = $distributor;
        }

        /** @var ProductDistributor[] $productDistributors */
        $productDistributors = [];
        $distributorsTotal = count($distributors);
        foreach ($productsWithDigitIndex as $index => $product) {
            $productDistributor = new ProductDistributor();
            $productDistributor->setProduct($product);

            $distributorIndex = $index % $distributorsTotal;
            $productDistributor->setDistributor($distributors[$distributorIndex]);

            $manager->persist($productDistributor);
            $productDistributors[] = $productDistributor;
        }

        /** @var Contract[] $contracts */
        $contracts = [];

        for ($i = 0; $i < 4; $i++) {
            $customer = new Customer();
            $customer->setCode('natural_person' . $i);

            $manager->persist($customer);

            $person = new NaturalPerson();
            $person->setCustomer($customer);

            $manager->persist($person);

            for ($j = 0; $j < 2; $j++) {
                $contract = new Contract();
                $contract->setCustomer($customer);

                $manager->persist($contract);
                $contracts[] = $contract;
            }

            foreach ($personBillingOptions as $option) {
                $customerOption = new CustomerNaturalPersonOption();
                $customerOption->setCustomer($customer);
                $customerOption->setBillingOption($option->getBillingOption());
                $customerOption->setPersonOption($option->getPersonOption());

                $manager->persist($customerOption);
            }
        }

        for ($i = 0; $i < 4; $i++) {
            $customer = new Customer();
            $customer->setCode('legal_entity' . $i);

            $manager->persist($customer);

            $entity = new LegalEntity();
            $entity->setCustomer($customer);

            $manager->persist($entity);

            for ($j = 0; $j < 2; $j++) {
                $contract = new Contract();
                $contract->setCustomer($customer);

                $manager->persist($contract);
                $contracts[] = $contract;
            }

            foreach ($entityBillingOptions as $option) {
                $customerOption = new CustomerLegalEntityOption();
                $customerOption->setCustomer($customer);
                $customerOption->setBillingOption($option->getBillingOption());
                $customerOption->setEntityOption($option->getEntityOption());

                $manager->persist($customerOption);
            }
        }

        /** @var PersonalAccount[] $accounts */
        foreach ($contracts as $contract) {
            for ($i = 0; $i < 2; $i++) {
                $account = new PersonalAccount();
                $account->setCustomer($contract->getCustomer());
                $account->setContract($contract);
                $account->setPublicAccount(md5(microtime()));

                $manager->persist($account);
                $accounts[] = $account;
            }
        }

        foreach ($accounts as $account) {
            foreach ($products as $product) {
                $productAccount = new ProductPersonalAccount();
                $productAccount->setProduct($product);
                $productAccount->setAccount($account);
                $productAccount->setCustomer($account->getCustomer());

                $manager->persist($productAccount);
            }
        }

        foreach ($accounts as $account) {
            foreach ($accountBillingOptions as $accountOption) {
                $contractOption = new ContractPersonalAccountOption();
                $contractOption->setAccount($account);
                $contractOption->setBillingOption($accountOption->getBillingOption());
                $contractOption->setAccountOption($accountOption->getAccountOption());

                $manager->persist($contractOption);
            }
        }

        /** @var AddressDistributionPoint[] $addressesPoints */
        $addressesPoints = [];
        /** @var Address[] $addresses */
        $addresses = [];
        for ($i = 0; $i < 3; $i++) {
            $address = new Address();
            $address->setCode(md5(microtime()));
            $address->setRegion(random_int(1, 9));

            $manager->persist($address);
            $addresses[] = $address;

            for ($j = 0; $j < 2; $j++) {
                $point = new DistributionPoint();

                $manager->persist($point);

                $addressPoint = new AddressDistributionPoint();
                $addressPoint->setAddress($address);
                $addressPoint->setDistributionPoint($point);

                $manager->persist($addressPoint);
                $addressesPoints[] = $addressPoint;
            }
        }

        foreach ($addresses as $address) {
            foreach ($locationBillingOptions as $locationOption) {
                $addressOption = new AddressLocationOption();
                $addressOption->setAddress($address);
                $addressOption->setLocationOption($locationOption->getLocationOption());
                $addressOption->setBillingOption($locationOption->getBillingOption());

                $manager->persist($addressOption);
            }
        }

        /** @var MeteringPoint[] $meteringPoints */
        $meteringPoints = [];
        foreach ($productDistributors as $distributor) {
            foreach ($addressesPoints as $point) {
                $meteringPoint = new MeteringPoint();
                $meteringPoint->setProduct($distributor->getProduct());
                $meteringPoint->setDistributor($distributor->getDistributor());
                $meteringPoint->setAddress($point->getAddress());
                $meteringPoint->setDistributionPoint($point->getDistributionPoint());

                $manager->persist($meteringPoint);
                $meteringPoints[] = $meteringPoint;
            }
        }

        $accountsNumber = count($accounts);
        /** @var PersonalAccountShare[] $accountsShares */
        $accountsShares = [];
        foreach ($meteringPoints as $index => $point) {
            $share = new PersonalAccountShare();
            $share->setProduct($point->getProduct());
            $share->setDistributor($point->getDistributor());
            $share->setAddress($point->getAddress());
            $share->setDistributionPoint($point->getDistributionPoint());

            $accountIndex = $index % $accountsNumber;
            $share->setCustomer($accounts[$accountIndex]->getCustomer());
            $share->setAccount($accounts[$accountIndex]);

            $share->setShareDividend(1);
            $share->setShareDivisor(1);

            $manager->persist($share);
            $accountsShares[] = $share;
        }

        /** @var MeteringDevice[] $devices */
        $devices = [];
        foreach ($meteringPoints as $point) {
            foreach ($modelsProduct as $model) {
                $isSameProduct = $point->getProduct()->getId() == $model->getProduct()->getId();
                if ($isSameProduct) {
                    $meteringDevice = new MeteringDevice();
                    $meteringDevice->setProduct($point->getProduct());
                    $meteringDevice->setDistributor($point->getDistributor());
                    $meteringDevice->setDistributionPoint($point->getDistributionPoint());
                    $meteringDevice->setModel($model->getModel());

                    $meteringDevice->setSerial(md5(microtime()));

                    $sub = 'P' . random_int(0, 2) . 'Y';
                    $add = 'P' . random_int(1, 2) . 'Y';

                    $meteringDevice->setStart((new DateTimeImmutable())->sub(new DateInterval($sub))->getTimestamp());
                    $meteringDevice->setFinish((new DateTimeImmutable())->add(new DateInterval($add)));

                    $manager->persist($meteringDevice);
                    $devices[] = $meteringDevice;
                }
            }
        }

        $manager->flush();

        ## Collect Readings

        $current = (new DateTimeImmutable())->sub(new DateInterval('P3M'));
        $end = (new DateTimeImmutable())->add(new DateInterval('P3M'));

        $start = 999_000;

        $intervals = ['P1D','P1M','P1D','P1M','P1D','P1M','P1D','P1M',];
        while ($current < $end) {
            foreach ($intervals as $interval) {
                $current = $current->add(new DateInterval($interval));

                if (random_int(0, 2) === 0) {
                    foreach ($sendersWays as $senderWay) {
                        foreach ($devices as $device) {
                            foreach ($deviceScales[$device->getModel()->getId()] as $scale) {
                                /** @var DeviceModelScale $scale */

                                $readings = new RawReadings();
                                $readings->setModel($scale->getModel());
                                $readings->setModelScale($scale);

                                $readings->setProduct($device->getProduct());
                                $readings->setDistributor($device->getDistributor());
                                $readings->setDistributionPoint($device->getDistributionPoint());
                                $readings->setStart($device->getStart());

                                $readings->setWay($senderWay->getWay());
                                $readings->setSender($senderWay->getSender());

                                $readings->setReadings(random_int($start, $start + 100));

                                $isOverflow = 0;
                                if (random_int(0, 99) === 99) {
                                    $isOverflow = 1;
                                }
                                $readings->setIsScaleOverflow($isOverflow);
                                $readings->setUploadTime($current);

                                $manager->persist($readings);
                            }
                        }

                        $manager->flush();
                    }
                }
            }

            $start += 100;
        }


        $manager->flush();
    }
}
