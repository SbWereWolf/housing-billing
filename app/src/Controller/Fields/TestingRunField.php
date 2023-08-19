<?php

namespace App\Controller\Fields;

use App\Controller\Housing\TestingRunCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class TestingRunField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('testingRun', '№ Прогона');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::
        new(
            'testingRun',
            '№ Прогона'
        )
            ->setCrudController(TestingRunCrudController::class);
    }
}