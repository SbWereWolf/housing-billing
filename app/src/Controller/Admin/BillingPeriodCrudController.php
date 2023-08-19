<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingPeriodField;
use App\Entity\BillingPeriod;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class BillingPeriodCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return BillingPeriod::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Расчётные периоды')
            ->setEntityLabelInSingular('Расчётный период')
            ->setDefaultSort([
                'year' => 'ASC',
                'month' => 'ASC',
                'start' => 'ASC',
                'id' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(TextFilter::new('title','Название'))
            ->add(DateTimeFilter::new('start','Начало'))
            ->add(DateTimeFilter::new('finish','Окончание'))
            ;
    }
}
