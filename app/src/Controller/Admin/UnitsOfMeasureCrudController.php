<?php

namespace App\Controller\Admin;

use App\Entity\UnitsOfMeasure;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UnitsOfMeasureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return UnitsOfMeasure::class;
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
