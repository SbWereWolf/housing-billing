<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ContractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class CustomerField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('customer', 'Потребитель');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('customer', 'Потребитель')
            ->setCrudController(ContractCrudController::class);
    }
}