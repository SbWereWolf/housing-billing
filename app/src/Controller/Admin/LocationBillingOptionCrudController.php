<?php

namespace App\Controller\Admin;

use App\Entity\LocationBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LocationBillingOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LocationBillingOption::class;
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
