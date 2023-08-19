<?php

namespace App\Controller\Housing;

use App\Entity\ContractControlPanel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContractControlPanelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ContractControlPanel::class;
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
