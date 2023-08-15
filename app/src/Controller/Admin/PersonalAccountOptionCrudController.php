<?php

namespace App\Controller\Admin;

use App\Entity\PersonalAccountOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonalAccountOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccountOption::class;
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
