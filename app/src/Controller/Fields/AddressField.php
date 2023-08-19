<?php

namespace App\Controller\Fields;

use App\Controller\Housing\AddressCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class AddressField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('address', 'Адрес');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'address',
            'Адрес'
        )
            ->setCrudController(AddressCrudController::class);
    }
}