<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\NaturalPersonOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class NaturalPersonOptionCrudController
    extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPersonOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры физических лиц')
            ->setEntityLabelInSingular('Параметр физических лиц');
    }
}
