<?php

namespace App\Controller\Admin;

use App\Entity\PersonalAccount;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonalAccountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccount::class;
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
