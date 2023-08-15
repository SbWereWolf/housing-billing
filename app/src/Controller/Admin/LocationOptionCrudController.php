<?php

namespace App\Controller\Admin;

use App\Entity\LocationOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LocationOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LocationOption::class;
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
