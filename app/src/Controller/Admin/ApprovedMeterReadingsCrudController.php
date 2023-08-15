<?php

namespace App\Controller\Admin;

use App\Entity\ApprovedMeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ApprovedMeterReadingsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ApprovedMeterReadings::class;
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
