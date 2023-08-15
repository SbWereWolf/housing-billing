<?php

namespace App\Controller\Admin;

use App\Entity\TestingSet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestingSetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestingSet::class;
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
