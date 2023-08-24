<?php

namespace App\Controller\Fields;

use App\Controller\Housing\TestingRunCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class TestingRuleField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('rule', 'Правило отбора');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('rule', 'Правило отбора')
            ->setCrudController(TestingRunCrudController::class);
    }
}