<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ProductCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ProductField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('product', 'Услуга');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'product',
            'Услуга'
        )
            ->setCrudController(ProductCrudController::class);
    }
}