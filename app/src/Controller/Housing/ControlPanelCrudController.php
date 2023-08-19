<?php

namespace App\Controller\Housing;

use App\Entity\ControlPanel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ControlPanelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ControlPanel::class;
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
