<?php

namespace App\Controller\Housing;

use App\Entity\ProductDistributor;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductDistributorCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductDistributor::class;
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
