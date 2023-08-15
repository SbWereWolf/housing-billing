<?php

namespace App\Controller\Admin;

use App\Entity\BillingPeriod;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class BillingPeriodCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return BillingPeriod::class;
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
