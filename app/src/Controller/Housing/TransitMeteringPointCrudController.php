<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Entity\TransitMeteringPoint;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class TransitMeteringPointCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return TransitMeteringPoint::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Транзитные точки измерения')
            ->setEntityLabelInSingular('Транзитная точки измерения')
            ->setDefaultSort([
                'primary' => 'ASC',
                'secondary' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(EntityFilter::new('primary', 'Первичная'))
            ->add(EntityFilter::new('secondary', 'Вторичная'));
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AssociationField::new('primary', 'Первичная')
            ->setCrudController(ProductCrudController::class);
        yield AssociationField::new('secondary', 'Вторичная')
            ->setCrudController(ProductCrudController::class);
    }
}
