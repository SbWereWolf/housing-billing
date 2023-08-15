<?php

namespace App\Controller\Admin;

use App\Entity\PersonalProductUsage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PersonalProductUsageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalProductUsage::class;
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
