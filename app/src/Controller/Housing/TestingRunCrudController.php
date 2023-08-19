<?php

namespace App\Controller\Housing;

use App\Entity\TestingRun;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TestingRunCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TestingRun::class;
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
