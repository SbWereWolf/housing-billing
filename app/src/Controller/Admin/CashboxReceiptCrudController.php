<?php

namespace App\Controller\Admin;

use App\Entity\CashboxReceipt;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CashboxReceiptCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return CashboxReceipt::class;
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
