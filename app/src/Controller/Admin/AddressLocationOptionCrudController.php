<?php

namespace App\Controller\Admin;

use App\Entity\AddressLocationOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AddressLocationOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AddressLocationOption::class;
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
