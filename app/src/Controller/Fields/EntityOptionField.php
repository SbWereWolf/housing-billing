<?php

namespace App\Controller\Fields;

use App\Controller\Housing\LegalEntityOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class EntityOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'entityOption',
            'Параметр юридического лица'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'entityOption',
            'Параметр юридического лица'
        )
            ->setCrudController(
                LegalEntityOptionCrudController::class
            );
    }
}