<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\LocationOptionField;
use App\Entity\LocationBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class LocationBillingOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return LocationBillingOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для местонахождений'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для местонахождений'
            )
            ->setDefaultSort([
                'locationOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(LocationOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield LocationOptionField::getField();
        yield BillingOptionField::getField();
    }
}
