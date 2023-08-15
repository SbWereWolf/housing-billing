<?php

namespace App\Controller\Admin;

use App\Entity\ReadingsWay;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReadingsWayCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsWay::class;
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
