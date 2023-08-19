<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\LocationOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class LocationOptionCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return LocationOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры места')
            ->setEntityLabelInSingular('Параметр места');
    }
}
