<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Entity\ProductDistributor;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ProductDistributorCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ProductDistributor::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Услуги поставщиков'
            )
            ->setEntityLabelInSingular(
                'Услуга поставщика'
            )
            ->setDefaultSort([
                'product' => 'ASC',
                'distributor' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ProductField::getField();
        yield DistributorField::getField();
    }
}
