<?php

namespace App\Controller\Housing;

use App\Entity\MeterUsage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeterUsageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeterUsage::class;
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
