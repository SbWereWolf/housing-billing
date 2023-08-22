<?php

namespace App\Controller\Fields;

use App\Controller\Housing\MeteringDeviceModelCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ModelField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('model', 'Модель прибора учёта');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('model', 'Модель прибора учёта')
            ->setCrudController(
                MeteringDeviceModelCrudController::class
            );
    }
}