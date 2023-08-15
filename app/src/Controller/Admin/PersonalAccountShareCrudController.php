<?php

namespace App\Controller\Admin;

use App\Entity\PersonalAccountShare;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonalAccountShareCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccountShare::class;
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
