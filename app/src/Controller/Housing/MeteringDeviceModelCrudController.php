<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\MeteringDeviceModel;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class MeteringDeviceModelCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDeviceModel::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Модели приборов учёта')
            ->setEntityLabelInSingular('Модель приборов учёта');
    }
}
