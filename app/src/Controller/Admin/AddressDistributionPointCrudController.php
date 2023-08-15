<?php

namespace App\Controller\Admin;

use App\Entity\AddressDistributionPoint;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AddressDistributionPointCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AddressDistributionPoint::class;
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
