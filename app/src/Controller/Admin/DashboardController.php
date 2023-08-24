<?php

namespace App\Controller\Admin;

use App\Controller\Housing\ProductCrudController;
use App\Entity\Address;
use App\Entity\AddressDistributionPoint;
use App\Entity\AddressLocationOption;
use App\Entity\ApprovedMeterReadings;
use App\Entity\BillingOption;
use App\Entity\BillingPeriod;
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
use App\Entity\MeterReadings;
use App\Entity\MeterUsage;
use App\Entity\NaturalPerson;
use App\Entity\NaturalPersonBillingOption;
use App\Entity\NaturalPersonOption;
use App\Entity\NumberDeviceOptionMeteringDeviceModel;
use App\Entity\PersonalAccount;
use App\Entity\PersonalAccountBillingOption;
use App\Entity\PersonalAccountOption;
use App\Entity\PersonalAccountShare;
use App\Entity\PersonalProductUsage;
use App\Entity\Product;
use App\Entity\ProductDistributor;
use App\Entity\ProductPersonalAccount;
use App\Entity\ProductUnitsOfMeasure;
use App\Entity\ReadingsPurpose;
use App\Entity\ReadingsSender;
use App\Entity\ReadingsWay;
use App\Entity\RelatedProduct;
use App\Entity\TestingRule;
use App\Entity\TestingSet;
use App\Entity\UnitsOfMeasure;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    #[Route('/', name: 'admin')]
    public function index(): Response
    {
        $adminUrlGenerator = $this->container
            ->get(AdminUrlGenerator::class);

        return $this->redirect(
            $adminUrlGenerator
                ->setController(ProductCrudController::class)
                ->generateUrl()
        );
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Расчёт стоимость услуг ЖКХ');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard(
            'Dashboard',
            'fa fa-home'
        );
        yield MenuItem::section();
        yield MenuItem::subMenu('Единицы измерения', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Единицы измерения',
                    'fas fa-list',
                    UnitsOfMeasure::class
                ),
                MenuItem::linkToCrud(
                    'Валюты',
                    'fas fa-list',
                    Currency::class
                ),
                MenuItem::linkToCrud(
                    'Переводы для единиц измерения',
                    'fas fa-list',
                    ConversionRatio::class
                ),
            ]);
        yield MenuItem::subMenu('Услуги ЖКХ', 'fas fa-list')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Услуги ЖКХ',
                    'fa-solid fa-apple-whole',
                    Product::class
                ),
                MenuItem::linkToCrud(
                    'Взаимосвязанные услуги',
                    'fas fa-list',
                    RelatedProduct::class
                ),
                MenuItem::linkToCrud(
                    'Единицы измерения для услуг ЖКХ',
                    'fas fa-list',
                    ProductUnitsOfMeasure::class
                ),
                MenuItem::linkToCrud(
                    'Поставщики услуг ЖКХ',
                    'fas fa-list',
                    Distributor::class
                ),
                MenuItem::linkToCrud(
                    'Услуги поставщиков',
                    'fas fa-list',
                    ProductDistributor::class
                ),
            ]);
        yield MenuItem::section();
        yield MenuItem::subMenu('Модели приборов учёта', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Модели приборов учёта',
                    'fas fa-list',
                    MeteringDeviceModel::class
                ),
                MenuItem::linkToCrud(
                    'Приборы учёта для услуг ЖКХ',
                    'fas fa-list',
                    MeteringDeviceModelProduct::class
                ),
                MenuItem::linkToCrud(
                    'Параметры моделей приборов учёта',
                    'fas fa-list',
                    DeviceOption::class
                ),
                MenuItem::linkToCrud(
                    'Числовые значения параметров' .
                    ' моделей приборов учёта',
                    'fas fa-list',
                    NumberDeviceOptionMeteringDeviceModel::class
                ),
                MenuItem::linkToCrud(
                    'Шкалы измерений',
                    'fas fa-list',
                    MeasuringScale::class
                ),
                MenuItem::linkToCrud(
                    'Шкалы приборов учёта',
                    'fas fa-list',
                    DeviceModelScale::class
                ),
            ]);
        yield MenuItem::subMenu('Приборы учёта', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Приборы учёта',
                    'fas fa-list',
                    MeteringDevice::class
                ),
                MenuItem::linkToCrud(
                    'Точки учёта',
                    'fas fa-list',
                    MeteringPoint::class
                ),
            ]);
        yield MenuItem::section();
        yield MenuItem::subMenu('Потребители услуг', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Потребители услуг ЖКХ',
                    'fas fa-list',
                    Customer::class
                ),
                MenuItem::linkToCrud(
                    'Физические лица',
                    'fas fa-list',
                    NaturalPerson::class
                ),
                MenuItem::linkToCrud(
                    'Параметры физических лиц',
                    'fas fa-list',
                    NaturalPersonOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для физических лиц',
                    'fas fa-list',
                    NaturalPersonBillingOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для ' .
                    ' потребителей физических лиц',
                    'fas fa-list',
                    CustomerNaturalPersonOption::class
                ),
                MenuItem::linkToCrud(
                    'Юридические лица',
                    'fas fa-list',
                    LegalEntity::class
                ),
                MenuItem::linkToCrud(
                    'Параметры юридических лиц',
                    'fas fa-list',
                    LegalEntityOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для юридических лиц',
                    'fas fa-list',
                    LegalEntityBillingOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для' .
                    ' потребителей юридических лиц',
                    'fas fa-list',
                    CustomerLegalEntityOption::class
                ),
            ]);
        yield MenuItem::subMenu('Лицевые счета', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Договоры',
                    'fas fa-list',
                    Contract::class
                ),
                MenuItem::linkToCrud(
                    'Лицевые счета',
                    'fas fa-list',
                    PersonalAccount::class
                ),
                MenuItem::linkToCrud(
                    'Услуги для лицевых счётов',
                    'fas fa-list',
                    ProductPersonalAccount::class
                ),
                MenuItem::linkToCrud(
                    'Параметры лицевых счетов',
                    'fas fa-list',
                    PersonalAccountOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для лицевых счетов',
                    'fas fa-list',
                    PersonalAccountBillingOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для договоров',
                    'fas fa-list',
                    ContractPersonalAccountOption::class
                ),
            ]);
        yield MenuItem::subMenu('Адреса', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Адреса обслуживания',
                    'fas fa-list',
                    Address::class
                ),
                MenuItem::linkToCrud(
                    'Параметры местонахождений',
                    'fas fa-list',
                    LocationOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для местонахождений',
                    'fas fa-list',
                    LocationBillingOption::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений для адресов',
                    'fas fa-list',
                    AddressLocationOption::class
                ),
                MenuItem::linkToCrud(
                    'Точки поставки',
                    'fas fa-list',
                    DistributionPoint::class
                ),
                MenuItem::linkToCrud(
                    'Точки поставки на адресах',
                    'fas fa-list',
                    AddressDistributionPoint::class
                ),
            ]);
        yield MenuItem::section();
        yield MenuItem::subMenu('Показания приборов учёта', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Назначения показаний',
                    'fas fa-list',
                    ReadingsPurpose::class
                ),
                MenuItem::linkToCrud(
                    'Отправители показаний',
                    'fas fa-list',
                    ReadingsSender::class
                ),
                MenuItem::linkToCrud(
                    'Каналы поступления показаний',
                    'fas fa-list',
                    ReadingsWay::class
                ),
                MenuItem::linkToCrud(
                    'Правила проверки показаний',
                    'fas fa-list',
                    TestingRule::class
                ),
                MenuItem::linkToCrud(
                    'Наборы правил для проверки показаний',
                    'fas fa-list',
                    TestingSet::class
                ),
                MenuItem::linkToCrud(
                    'Одобренные показания',
                    'fas fa-list',
                    ApprovedMeterReadings::class
                ),
                MenuItem::linkToCrud(
                    'Показания приборов учёта',
                    'fas fa-list',
                    MeterReadings::class
                ),
                MenuItem::linkToCrud(
                    'Объём потребления услуг ЖКХ',
                    'fas fa-list',
                    MeterUsage::class
                ),
            ]);
        yield MenuItem::subMenu('Начисления', '')
            ->setSubItems([
                MenuItem::linkToCrud(
                    'Расчётные периоды',
                    'fas fa-list',
                    BillingPeriod::class
                ),
                MenuItem::linkToCrud(
                    'Параметры начислений',
                    'fas fa-list',
                    BillingOption::class
                ),
                MenuItem::linkToCrud(
                    'Доли лицевых счётов в потреблении',
                    'fas fa-list',
                    PersonalAccountShare::class
                ),
                MenuItem::linkToCrud(
                    'Объёмы потребления лицевых счётов',
                    'fas fa-list',
                    PersonalProductUsage::class
                ),
            ]);
    }
}
