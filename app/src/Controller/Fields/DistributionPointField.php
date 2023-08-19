<?php

namespace App\Controller\Fields;

use App\Controller\Housing\DistributionPointCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class DistributionPointField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'distributionPoint',
            'Точка поставки'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'distributionPoint',
            'Точка поставки'
        )
            ->setCrudController(
                DistributionPointCrudController::class
            );
    }
}