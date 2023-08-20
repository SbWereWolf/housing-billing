<?php

namespace App\Controller\Housing;

use App\Entity\CustomerNaturalPersonOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CustomerNaturalPersonOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CustomerNaturalPersonOption::class;
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