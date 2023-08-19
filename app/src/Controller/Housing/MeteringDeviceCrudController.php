<?php

namespace App\Controller\Housing;

use App\Entity\MeteringDevice;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeteringDeviceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDevice::class;
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
