<?php

namespace App\Controller\Fields;

use App\Controller\Housing\LegalEntityOptionCrudController;
use App\Controller\Housing\NaturalPersonOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class PersonalOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'personOption',
            'Параметр физического лица'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'personOption',
            'Параметр физического лица'
        )
            ->setCrudController(
                NaturalPersonOptionCrudController::class
            );
    }
}