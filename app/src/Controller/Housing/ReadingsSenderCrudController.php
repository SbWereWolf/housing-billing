<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\ReadingsSender;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ReadingsSenderCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsSender::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Отправители показаний')
            ->setEntityLabelInSingular('Отправитель показаний');
    }
}
