<?php

namespace App\Controller\Admin;

use App\Entity\InvoiceProductUsageDetail;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InvoiceProductUsageDetailCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return InvoiceProductUsageDetail::class;
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
