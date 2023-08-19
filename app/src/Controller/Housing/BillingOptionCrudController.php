<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\BillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class BillingOptionCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return BillingOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры начислений')
            ->setEntityLabelInSingular('Параметр начисления');
    }
}
