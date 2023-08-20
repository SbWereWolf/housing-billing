<?php

namespace App\Controller\Fields;

use App\Controller\Housing\PersonalAccountOptionCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class AccountOptionField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'accountOption',
            'Параметр лицевого счёта'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'accountOption',
            'Параметр лицевого счёта'
        )
            ->setCrudController(
                PersonalAccountOptionCrudController::class
            );
    }
}