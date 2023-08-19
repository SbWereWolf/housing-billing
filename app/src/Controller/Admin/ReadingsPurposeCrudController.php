<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\ReadingsPurpose;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ReadingsPurposeCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsPurpose::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Назначения показаний')
            ->setEntityLabelInSingular('Назначение показаний');
    }
}
