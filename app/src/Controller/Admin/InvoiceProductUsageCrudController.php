<?php

namespace App\Controller\Admin;

use App\Entity\InvoiceProductUsage;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InvoiceProductUsageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InvoiceProductUsage::class;
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
