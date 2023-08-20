<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ContractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ContractField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('contract','Договор');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new('contract','Договор')
            ->setCrudController(ContractCrudController::class);
    }
}