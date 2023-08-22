<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Entity\DistributionPoint;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class DistributionPointCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return DistributionPoint::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Точки поставки')
            ->setEntityLabelInSingular('Точка поставки');
    }
}
