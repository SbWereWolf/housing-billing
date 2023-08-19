<?php

namespace App\Controller\Housing;

use App\Entity\MeteringPoint;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeteringPointCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeteringPoint::class;
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
