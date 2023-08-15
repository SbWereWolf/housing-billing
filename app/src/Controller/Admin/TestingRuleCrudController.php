<?php

namespace App\Controller\Admin;

use App\Entity\TestingRule;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestingRuleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestingRule::class;
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
