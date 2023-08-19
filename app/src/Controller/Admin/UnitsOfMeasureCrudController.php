<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\UnitsOfMeasure;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class UnitsOfMeasureCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return UnitsOfMeasure::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Единицы измерения')
            ->setEntityLabelInSingular('Единица изменения');
    }
}
