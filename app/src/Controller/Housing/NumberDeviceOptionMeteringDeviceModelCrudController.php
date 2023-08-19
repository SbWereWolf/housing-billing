<?php

namespace App\Controller\Housing;

use App\Entity\NumberDeviceOptionMeteringDeviceModel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NumberDeviceOptionMeteringDeviceModelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NumberDeviceOptionMeteringDeviceModel::class;
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
