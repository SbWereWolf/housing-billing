<?php

namespace App\Controller\Admin;

use App\Entity\CustomerLegalEntityOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CustomerLegalEntityOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CustomerLegalEntityOption::class;
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
