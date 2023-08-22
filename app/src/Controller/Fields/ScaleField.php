<?php

namespace App\Controller\Fields;

use App\Controller\Housing\MeasuringScaleCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ScaleField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('scale', 'Измерительная шкала');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('scale', 'Измерительная шкала')
            ->setCrudController(MeasuringScaleCrudController::class);
    }
}