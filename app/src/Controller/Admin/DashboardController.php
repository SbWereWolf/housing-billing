<?php

namespace App\Controller\Admin;

use App\Controller\Housing\AddressCrudController;
use App\Entity\Address;
use App\Entity\AddressDistributionPoint;
use App\Entity\AddressLocationOption;
use App\Entity\ApprovedMeterReadings;
use App\Entity\BillingOption;
use App\Entity\BillingPeriod;
use App\Entity\Customer;
use App\Entity\DeviceOption;
use App\Entity\Distributor;
use App\Entity\LegalEntityOption;
use App\Entity\LocationOption;
use App\Entity\MeasuringScale;
use App\Entity\MeteringDeviceModel;
use App\Entity\NaturalPersonOption;
use App\Entity\PersonalAccountOption;
use App\Entity\Product;
use App\Entity\ReadingsPurpose;
use App\Entity\ReadingsSender;
use App\Entity\ReadingsWay;
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
                ->setController(AddressCrudController::class)
                ->generateUrl()
        );
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('App');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard(
            'Dashboard',
            'fa fa-home'
        );
        yield MenuItem::linkToCrud(
            'Адреса обслуживания',
            'fas fa-list',
            Address::class
        );
        yield MenuItem::linkToCrud(
            'Точки поставки на адресах',
            'fas fa-list',
            AddressDistributionPoint::class
        );
        yield MenuItem::linkToCrud(
            'Параметры адресов',
            'fas fa-list',
            AddressLocationOption::class
        );
        yield MenuItem::linkToCrud(
            'Одобренные показания',
            'fas fa-list',
            ApprovedMeterReadings::class
        );
        yield MenuItem::linkToCrud(
            'Параметры начислений',
            'fas fa-list',
            BillingOption::class
        );
        yield MenuItem::linkToCrud(
            'Услуги ЖКХ',
            'fas fa-list',
            Product::class
        );
        yield MenuItem::linkToCrud(
            'Назначения показаний',
            'fas fa-list',
            ReadingsPurpose::class
        );
        yield MenuItem::linkToCrud(
            'Отправители показаний',
            'fas fa-list',
            ReadingsSender::class
        );
        yield MenuItem::linkToCrud(
            'Каналы поступления показаний',
            'fas fa-list',
            ReadingsWay::class
        );
        yield MenuItem::linkToCrud(
            'Правила проверки показаний',
            'fas fa-list',
            TestingRule::class
        );
        yield MenuItem::linkToCrud(
            'Наборы правил для проверки показаний',
            'fas fa-list',
            TestingSet::class
        );
        yield MenuItem::linkToCrud(
            'Единицы измерения',
            'fas fa-list',
            UnitsOfMeasure::class
        );
        yield MenuItem::linkToCrud(
            'Потребители услуг ЖКХ',
            'fas fa-list',
            Customer::class
        );
        yield MenuItem::linkToCrud(
            'Параметры приборов учёта',
            'fas fa-list',
            DeviceOption::class
        );
        yield MenuItem::linkToCrud(
            'Поставщики услуг ЖКХ',
            'fas fa-list',
            Distributor::class
        );
        yield MenuItem::linkToCrud(
            'Параметры юридических лиц',
            'fas fa-list',
            LegalEntityOption::class
        );
        yield MenuItem::linkToCrud(
            'Параметры места',
            'fas fa-list',
            LocationOption::class
        );
        yield MenuItem::linkToCrud(
            'Шкалы измерений',
            'fas fa-list',
            MeasuringScale::class
        );
        yield MenuItem::linkToCrud(
            'Модели приборов учёта',
            'fas fa-list',
            MeteringDeviceModel::class
        );
        yield MenuItem::linkToCrud(
            'Параметры физических лиц',
            'fas fa-list',
            NaturalPersonOption::class
        );
        yield MenuItem::linkToCrud(
            'Параметры лицевых счетов',
            'fas fa-list',
            PersonalAccountOption::class
        );
        yield MenuItem::linkToCrud(
            'Расчётные периоды',
            'fas fa-list',
            BillingPeriod::class
        );
    }
}
