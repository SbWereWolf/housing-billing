<?php

namespace App\Controller\Fields;

use App\Controller\Housing\DeviceOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class DeviceOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'deviceOption',
            'Параметр приборов учёта'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new(
            'deviceOption',
            'Параметр приборов учёта'
        )
            ->setCrudController(DeviceOptionCrudController::class);
    }
}