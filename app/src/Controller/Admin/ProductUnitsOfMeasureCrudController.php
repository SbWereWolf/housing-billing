<?php

namespace App\Controller\Admin;

use App\Entity\ProductUnitsOfMeasure;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductUnitsOfMeasureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductUnitsOfMeasure::class;
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
