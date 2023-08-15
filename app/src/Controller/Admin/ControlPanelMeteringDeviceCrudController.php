<?php

namespace App\Controller\Admin;

use App\Entity\ControlPanelMeteringDevice;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ControlPanelMeteringDeviceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlPanelMeteringDevice::class;
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
