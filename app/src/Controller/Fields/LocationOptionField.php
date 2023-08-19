<?php

namespace App\Controller\Fields;

use App\Controller\Housing\LocationOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class LocationOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'locationOption',
            'Параметр места'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'locationOption',
            'Параметр места'
        )
            ->setCrudController(LocationOptionCrudController::class);
    }
}