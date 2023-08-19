<?php

namespace App\Controller\Housing;

use App\Entity\LegalEntity;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LegalEntityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntity::class;
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
