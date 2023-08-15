<?php

namespace App\Controller\Admin;

use App\Entity\LegalEntityBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LegalEntityBillingOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntityBillingOption::class;
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
