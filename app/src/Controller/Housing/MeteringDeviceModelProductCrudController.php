<?php

namespace App\Controller\Housing;

use App\Entity\MeteringDeviceModelProduct;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeteringDeviceModelProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDeviceModelProduct::class;
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
