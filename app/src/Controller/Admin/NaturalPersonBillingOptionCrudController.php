<?php

namespace App\Controller\Admin;

use App\Entity\NaturalPersonBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NaturalPersonBillingOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPersonBillingOption::class;
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
