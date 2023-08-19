<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithCaptionController;
use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class ProductCrudController extends EntityWithCaptionController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        $crud = parent::configureCrud($crud);

        return $crud
            ->setEntityLabelInPlural('Услуги ЖКХ')
            ->setEntityLabelInSingular('Услуга');
    }
}
