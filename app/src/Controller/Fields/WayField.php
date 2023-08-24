<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ReadingsWayCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class WayField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('way', 'Источник');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('way', 'Источник')
            ->setCrudController(ReadingsWayCrudController::class);
    }
}