<?php

namespace App\Controller\Housing;

use App\Entity\ReasonOfWeededOut;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReasonOfWeededOutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReasonOfWeededOut::class;
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
