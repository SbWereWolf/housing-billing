<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\Distributor;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class DistributorCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return Distributor::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Поставщики услуг ЖКХ')
            ->setEntityLabelInSingular('Поставщик услуг ЖКХ');
    }
}
