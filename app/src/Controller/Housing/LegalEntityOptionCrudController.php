<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\LegalEntityOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class LegalEntityOptionCrudController
    extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntityOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Параметры юридических лиц')
            ->setEntityLabelInSingular('Параметр юридических лиц');
    }
}
