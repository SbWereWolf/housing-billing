<?php

namespace App\Controller\Fields;

use App\Controller\Housing\BillingOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class BillingOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'billingOption',
            'Параметр начислений'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'billingOption',
            'Параметр начислений'
        )
            ->setCrudController(BillingOptionCrudController::class);
    }
}