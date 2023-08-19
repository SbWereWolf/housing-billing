<?php

namespace App\Controller\Housing;

use App\Entity\NaturalPerson;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NaturalPersonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPerson::class;
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
