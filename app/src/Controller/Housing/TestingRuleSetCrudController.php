<?php

namespace App\Controller\Housing;

use App\Entity\TestingRuleSet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestingRuleSetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestingRuleSet::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}