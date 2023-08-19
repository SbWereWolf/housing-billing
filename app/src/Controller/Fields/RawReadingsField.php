<?php

namespace App\Controller\Fields;

use App\Controller\Housing\RawReadingsCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class RawReadingsField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('rawReadings', 'Показания');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'rawReadings',
            'Показания'
        )
            ->setCrudController(RawReadingsCrudController::class);
    }
}