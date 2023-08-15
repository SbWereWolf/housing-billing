<?php

namespace App\Controller\Admin;

use App\Entity\RawReadings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RawReadingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return RawReadings::class;
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
