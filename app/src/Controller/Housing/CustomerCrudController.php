<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\Customer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class CustomerCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return Customer::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Потребители услуг ЖКХ')
            ->setEntityLabelInSingular('Потребитель услуг ЖКХ');
    }
}
