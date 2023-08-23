<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\PersonalAccountOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class PersonalAccountOptionCrudController
    extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccountOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры лицевых счетов')
            ->setEntityLabelInSingular('Параметр лицевых счетов');
    }
}
