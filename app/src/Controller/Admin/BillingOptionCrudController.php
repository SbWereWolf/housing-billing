<?php

namespace App\Controller\Admin;

use App\Entity\BillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BillingOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BillingOption::class;
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
