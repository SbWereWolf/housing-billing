<?php

namespace App\Controller\Admin;

use App\Entity\ReadingsSenderReadingsWay;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ReadingsSenderReadingsWayCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsSenderReadingsWay::class;
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
