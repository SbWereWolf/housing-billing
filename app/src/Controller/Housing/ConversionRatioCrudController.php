<?php

namespace App\Controller\Housing;

use App\Entity\ConversionRatio;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ConversionRatioCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ConversionRatio::class;
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
