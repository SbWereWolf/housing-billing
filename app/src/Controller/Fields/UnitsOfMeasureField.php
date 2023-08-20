<?php

namespace App\Controller\Fields;

use App\Controller\Housing\UnitsOfMeasureCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class UnitsOfMeasureField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'unitsOfMeasure',
            'Единица измерения'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'unitsOfMeasure',
            'Единица измерения'
        )
            ->setCrudController(
                UnitsOfMeasureCrudController::class
            );
    }
}