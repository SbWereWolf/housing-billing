<?php

namespace App\Controller\Admin;

use App\Entity\MeteringDeviceModel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeteringDeviceModelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDeviceModel::class;
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
