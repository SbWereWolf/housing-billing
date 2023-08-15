<?php

namespace App\Controller\Admin;

use App\Entity\ReadingsSender;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReadingsSenderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsSender::class;
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
