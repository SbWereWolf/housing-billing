<?php

namespace App\Controller\Admin;

use App\Entity\DeviceOption;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DeviceOptionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DeviceOption::class;
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
