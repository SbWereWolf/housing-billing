<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\MeasuringScale;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class MeasuringScaleCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return MeasuringScale::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Шкалы измерений')
            ->setEntityLabelInSingular('Шкала измерения');
    }
}
