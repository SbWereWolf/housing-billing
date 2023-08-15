<?php

namespace App\Controller\Admin;

use App\Entity\MeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MeterReadingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MeterReadings::class;
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
