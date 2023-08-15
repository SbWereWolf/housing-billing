<?php

namespace App\Controller\Admin;

use App\Entity\LegalEntityOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LegalEntityOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntityOption::class;
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
