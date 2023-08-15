<?php

namespace App\Controller\Admin;

use App\Entity\MeasuringScale;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeasuringScaleCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeasuringScale::class;
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
