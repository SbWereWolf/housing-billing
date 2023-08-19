<?php

namespace App\Controller\Housing;

use App\Entity\DistributionPoint;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DistributionPointCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DistributionPoint::class;
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
