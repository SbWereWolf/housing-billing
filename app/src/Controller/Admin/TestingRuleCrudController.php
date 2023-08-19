<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\TestingRule;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class TestingRuleCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return TestingRule::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Правила проверки показаний')
            ->setEntityLabelInSingular('Правило проверки показаний');
    }
}
