<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AddressField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Entity\MeteringPoint;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class MeteringPointCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return MeteringPoint::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Точки учёта')
            ->setEntityLabelInSingular('Точка учёта')
            ->setDefaultSort([
                'address' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(AddressField::getFilter())
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AddressField::getField();
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
    }
}
