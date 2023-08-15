<?php

namespace App\Controller\Admin;

use App\Entity\TransitMeteringPoint;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TransitMeteringPointCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return TransitMeteringPoint::class;
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
