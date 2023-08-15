<?php

namespace App\Controller\Admin;

use App\Entity\ReadingsPurpose;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReadingsPurposeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsPurpose::class;
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
