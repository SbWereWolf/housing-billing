<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AddressField;
use App\Controller\Fields\DistributionPointField;
use App\Entity\AddressDistributionPoint;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class AddressDistributionPointCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return AddressDistributionPoint::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Адреса и их точки поставки')
            ->setEntityLabelInSingular('Точка поставки для Адреса')
            ->setDefaultSort([
                'address' => 'ASC',
                'distributionPoint' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(AddressField::getFilter())
            ->add(DistributionPointField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AddressField::getField();
        yield DistributionPointField::getField();
    }
}
