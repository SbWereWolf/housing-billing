<?php

namespace App\Controller\Housing;

use App\Entity\ContractPersonalAccountOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContractPersonalAccountOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContractPersonalAccountOption::class;
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
