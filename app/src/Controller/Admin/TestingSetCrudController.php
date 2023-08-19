<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\TestingSet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class TestingSetCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return TestingSet::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural(
                'Наборы правил для проверки показаний'
            )
            ->setEntityLabelInSingular(
                'Набор правил для проверки показаний'
            );
    }
}
