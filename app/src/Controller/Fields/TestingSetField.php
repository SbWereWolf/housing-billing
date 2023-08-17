<?php

namespace App\Controller\Fields;

use App\Controller\Admin\AddressCrudController;
use App\Controller\Admin\TestingSetCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class TestingSetField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('testingSet', 'Набор проверок');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'testingSet',
            'Набор проверок'
        )
            ->setCrudController(TestingSetCrudController::class);
    }
}