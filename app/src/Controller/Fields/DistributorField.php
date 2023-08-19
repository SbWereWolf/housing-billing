<?php

namespace App\Controller\Fields;

use App\Controller\Housing\DistributorCrudController;
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