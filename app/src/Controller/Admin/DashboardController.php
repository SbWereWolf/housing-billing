<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use App\Entity\AddressDistributionPoint;
use App\Entity\AddressLocationOption;
use App\Entity\ApprovedMeterReadings;
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
    }
}
