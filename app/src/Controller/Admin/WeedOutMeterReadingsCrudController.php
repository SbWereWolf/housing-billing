<?php

namespace App\Controller\Admin;

use App\Entity\WeedOutMeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class WeedOutMeterReadingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return WeedOutMeterReadings::class;
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
