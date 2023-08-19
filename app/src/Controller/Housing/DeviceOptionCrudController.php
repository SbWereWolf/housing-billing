<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\DeviceOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class DeviceOptionCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return DeviceOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры приборов учёта')
            ->setEntityLabelInSingular('Параметр приборов учёта');
    }
}
