<?php

namespace App\Controller\Fields;

use App\Controller\Housing\PersonalAccountCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class AccountField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new(
            'account',
            'Лицевой счёт'
        );
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'account',
            'Лицевой счёт'
        )
            ->setCrudController(
                PersonalAccountCrudController::class
            );
    }
}