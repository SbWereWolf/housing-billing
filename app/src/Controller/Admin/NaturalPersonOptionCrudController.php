<?php

namespace App\Controller\Admin;

use App\Entity\NaturalPersonOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NaturalPersonOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPersonOption::class;
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
