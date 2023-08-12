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

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ## Install

        /** @var Product[] $products */
        $products = [];
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
        }

        $obj = new RelatedProduct();
        $obj->setParentProductId($products['related_product1']->getId());
        $obj->setChildProductId($products['related_product2']->getId());
        $manager->persist($obj);

        $obj = new SharedProduct();
        $obj->setSharedProductId($products['shared_product1']->getId());
        $obj->setIndividualProductId($products['shared_product2']->getId());
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
            $currency->setUnitsOfMeasureId($units[$code]->getId());

            $manager->persist($currency);
            $currencies[] = $currency;
        }

        $obj = new ConversionRatio();
        $obj->setSourceUnitsOfMeasureId($units['units_of_measure1']->getId());
        $obj->setTargetUnitsOfMeasureId($units['units_of_measure2']->getId());
        $manager->persist($obj);

        $obj = new ConversionRatio();
        $obj->setSourceUnitsOfMeasureId($units['currency1']->getId());
        $obj->setTargetUnitsOfMeasureId($units['currency2']->getId());
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
                $productUnit->setUnitsOfMeasureId($units[$code]->getId());
                $productUnit->setProductId($product->getId());

                $manager->persist($productUnit);
                $productUnits[] = $productUnit;
            }
        }

        /** @var MeteringDeviceModel[] $models */
        $models = [];
        for ($i = 0; $i < 3; $i++) {
            $model = new MeteringDeviceModel();
            $model->setCode('model' . $i);

            $manager->persist($model);
            $models[] = $model;
        }

        /** @var MeteringDeviceModelProduct[] $modelsProduct */
        $modelsProduct = [];
        foreach ($models as $model) {
            foreach ($products as $product) {
                $modelProduct = new MeteringDeviceModelProduct();
                $modelProduct->setMeteringDeviceModelId($model->getId());
                $modelProduct->setProductId($product->getId());

                $manager->persist($modelProduct);
                $modelsProduct[] = $modelProduct;
            }
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
                $numberOption->setMeteringDeviceModelId($model->getId());
                $numberOption->setDeviceOptionId($option->getId());
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
        for ($i = 0; $i < count($readingsPurposes); $i++) {
            $scale = new MeasuringScale();
            $scale->setCode('scale' . $i);
            $scale->setReadingsLimit(random_int(999999, 999999999));
            $scale->setReadingsResolution(random_int(1, 9));

            $manager->persist($scale);
            $measuringScales[] = $scale;
        }

        $unitsNumber = count($productUnits);
        /** @var DeviceModelScale[] $modelScales */
        $modelScales = [];
        foreach ($models as $model) {
            foreach ($measuringScales as $index => $scale) {
                $modelScale = new DeviceModelScale();
                $modelScale->setMeteringDeviceModelId($model->getId());
                $modelScale->setMeasuringScaleId($scale->getId());
                $modelScale->setReadingsPurposeId($readingsPurposes[$index]->getId());

                $unitIndex = $index % $unitsNumber;
                $modelScale->setUnitsOfMeasureId($productUnits[$unitIndex]->getUnitsOfMeasureId());

                $manager->persist($modelScale);
                $modelScales[] = $modelScale;
            }
        }

        /** @var ReadingsSender[] $senders */
        $senders = [];
        for ($i = 0; $i < 4; $i++) {
            $sender = new ReadingsSender();
            $sender->setCode('sender' . $i);

            $manager->persist($sender);
            $senders[] = $sender;
        }

        /** @var ReadingsWay[] $ways */
        $ways = [];
        for ($i = 0; $i < 4; $i++) {
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
                $senderWay->setReadingsSenderId($sender->getId());
                $senderWay->setReadingsWayId($way->getId());

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
                $ruleSet->setTestingSetId($set->getId());
                $ruleSet->setTestingRuleId($rule->getId());

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
            $mapping->setBillingOptionId($billingOption->getId());
            $mapping->setLocationOptionId($option->getId());

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
            $mapping->setBillingOptionId($billingOption->getId());
            $mapping->setPersonalAccountOptionId($option->getId());

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
            $mapping->setBillingOptionId($billingOption->getId());
            $mapping->setLegalEntityOptionId($option->getId());

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
            $mapping->setBillingOptionId($billingOption->getId());
            $mapping->setNaturalPersonOptionId($option->getId());

            $manager->persist($mapping);
            $personBillingOptions[] = $mapping;
        }

        ## Setup

        /** @var Distributor[] $distributors */
        $distributors = [];
        for ($i = 0; $i < 3; $i++) {
            $distributor = new Distributor();
            $distributor->setCode('distributor' . $i);

            $manager->persist($distributor);
            $distributors[] = $distributor;
        }

        /** @var ProductDistributor[] $productDistributors */
        $productDistributors = [];
        foreach ($products as $product) {
            foreach ($distributors as $distributor) {
                $productDistributor = new ProductDistributor();
                $productDistributor->setProductId($product->getId());
                $productDistributor->setDistributorId($distributor->getId());

                $manager->persist($productDistributor);
                $productDistributors[] = $productDistributor;
            }
        }

        /** @var Contract[] $contracts */
        $contracts = [];

        for ($i = 0; $i < 4; $i++) {
            $customer = new Customer();
            $customer->setCode('natural_person' . $i);

            $manager->persist($customer);

            $person = new NaturalPerson();
            $customerId = $customer->getId();
            $person->setCustomerId($customerId);

            $manager->persist($person);

            for ($j = 0; $j < 2; $j++) {
                $contract = new Contract();
                $contract->setCustomerId($customerId);

                $manager->persist($contract);
                $contracts[] = $contract;
            }

            foreach ($personBillingOptions as $option) {
                $customerOption = new CustomerNaturalPersonOption();
                $customerOption->setCustomerId($customerId);
                $customerOption->setBillingOptionId($option->getBillingOptionId());
                $customerOption->setNaturalPersonOptionId($option->getNaturalPersonOptionId());

                $manager->persist($customerOption);
            }
        }

        for ($i = 0; $i < 4; $i++) {
            $customer = new Customer();
            $customer->setCode('legal_entity' . $i);

            $manager->persist($customer);

            $entity = new LegalEntity();
            $customerId = $customer->getId();
            $entity->setCustomerId($customerId);

            $manager->persist($entity);

            for ($j = 0; $j < 2; $j++) {
                $contract = new Contract();
                $contract->setCustomerId($customerId);

                $manager->persist($contract);
                $contracts[] = $contract;
            }

            foreach ($entityBillingOptions as $option) {
                $customerOption = new CustomerLegalEntityOption();
                $customerOption->setCustomerId($customerId);
                $customerOption->setBillingOptionId($option->getBillingOptionId());
                $customerOption->setLegalEntityOptionId($option->getLegalEntityOptionId());

                $manager->persist($customerOption);
            }
        }

        /** @var PersonalAccount[] $accounts */
        foreach ($contracts as $contract) {
            for ($i = 0; $i < 3; $i++) {
                $account = new PersonalAccount();
                $account->setCustomerId($contract->getCustomerId());
                $account->setContractId($contract->getId());
                $account->setPublicAccount(md5(microtime()));

                $manager->persist($account);
                $accounts[] = $account;
            }
        }

        foreach ($accounts as $account) {
            foreach ($products as $product) {
                $productAccount = new ProductPersonalAccount();
                $productAccount->setProductId($product->getId());
                $productAccount->setPersonalAccountId($account->getId());
                $productAccount->setCustomerId($account->getCustomerId());

                $manager->persist($productAccount);
            }
        }

        foreach ($accounts as $account) {
            foreach ($accountBillingOptions as $accountOption) {
                $contractOption = new ContractPersonalAccountOption();
                $contractOption->setPersonalAccountId($account->getId());
                $contractOption->setBillingOptionId($accountOption->getBillingOptionId());
                $contractOption->setPersonalAccountOptionId($accountOption->getPersonalAccountOptionId());

                $manager->persist($contractOption);
            }
        }

        /** @var AddressDistributionPoint[] $addressesPoints */
        $addressesPoints = [];
        /** @var Address[] $addresses */
        $addresses = [];
        for ($i = 0; $i < 20; $i++) {
            $address = new Address();
            $address->setCode(md5(microtime()));
            $address->setRegion(random_int(1, 9));

            $manager->persist($address);
            $addresses[] = $address;

            for ($j = 0; $j < 2; $j++) {
                $point = new DistributionPoint();

                $manager->persist($point);

                $addressPoint = new AddressDistributionPoint();
                $addressPoint->setAddressId($address->getId());
                $addressPoint->setDistributionPointId($point->getId());

                $manager->persist($addressPoint);
                $addressesPoints[] = $addressPoint;
            }
        }

        foreach ($addresses as $address) {
            foreach ($locationBillingOptions as $locationOption) {
                $addressOption = new AddressLocationOption();
                $addressOption->setAddressId($address->getId());
                $addressOption->setLocationOptionId($locationOption->getLocationOptionId());
                $addressOption->setBillingOptionId($locationOption->getBillingOptionId());

                $manager->persist($addressOption);
            }
        }

        /** @var MeteringPoint[] $meteringPoints */
        $meteringPoints = [];
        foreach ($productDistributors as $distributor) {
            foreach ($addressesPoints as $point) {
                $meteringPoint = new MeteringPoint();
                $meteringPoint->setProductId($distributor->getProductId());
                $meteringPoint->setDistributorId($distributor->getDistributorId());
                $meteringPoint->setAddressId($point->getAddressId());
                $meteringPoint->setDistributionPointId($point->getDistributionPointId());

                $manager->persist($meteringPoint);
                $meteringPoints[] = $meteringPoint;
            }
        }

        $accountsNumber = count($accounts);
        /** @var PersonalAccountShare[] $accountsShares */
        $accountsShares = [];
        foreach ($meteringPoints as $index => $point) {
            $share = new PersonalAccountShare();
            $share->setProductId($point->getProductId());
            $share->setDistributorId($point->getDistributorId());
            $share->setAddressId($point->getAddressId());
            $share->setDistributionPointId($point->getDistributionPointId());

            $accountIndex = $index % $accountsNumber;
            $share->setCustomerId($accounts[$accountIndex]->getCustomerId());
            $share->setPersonalAccountId($accounts[$accountIndex]->getId());

            $share->setShareDividend(1);
            $share->setShareDivisor(1);

            $manager->persist($share);
            $accountsShares[] = $share;
        }

        /** @var MeteringDevice[] $meteringDevices */
        $meteringDevices = [];
        foreach ($meteringPoints as $point) {
            foreach ($models as $model) {
                $meteringDevice = new MeteringDevice();
                $meteringDevice->setProductId($point->getProductId());
                $meteringDevice->setDistributorId($point->getDistributorId());
                $meteringDevice->setDistributionPointId($point->getDistributionPointId());
                $meteringDevice->setMeteringDeviceModelId($model->getId());

                $meteringDevice->setSerial(md5(microtime()));

                $sub = 'P' . random_int(0, 2) . 'Y';
                $add = 'P' . random_int(1, 2) . 'Y';

                $meteringDevice->setStart((new DateTimeImmutable())->sub(new DateInterval($sub)));
                $meteringDevice->setFinish((new DateTimeImmutable())->add(new DateInterval($add)));

                $manager->persist($meteringDevice);
                $meteringDevices[] = $meteringDevice;
            }
        }


        $manager->flush();
    }
}
