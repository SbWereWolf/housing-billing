<?php

namespace App\Controller\Admin;

use App\Entity\ProductPersonalAccount;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductPersonalAccountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductPersonalAccount::class;
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
