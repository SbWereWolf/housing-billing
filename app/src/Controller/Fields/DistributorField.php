<?php

namespace App\Controller\Fields;

use App\Controller\Admin\AddressCrudController;
use App\Controller\Admin\DistributorCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class DistributorField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('distributor', 'Поставщик');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'distributor',
            'Поставщик'
        )
            ->setCrudController(DistributorCrudController::class);
    }
}