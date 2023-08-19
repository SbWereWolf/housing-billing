<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\ReadingsWay;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ReadingsWayCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsWay::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Каналы поступления показаний')
            ->setEntityLabelInSingular('Канал поступления показаний');
    }
}
