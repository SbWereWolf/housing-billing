<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\ModelField;
use App\Controller\Fields\ProductField;
use App\Entity\MeteringDeviceModelProduct;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class MeteringDeviceModelProductCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDeviceModelProduct::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Приборы учёта для услуг ЖКХ')
            ->setEntityLabelInSingular('Прибор учёта для услуги ЖКХ')
            ->setDefaultSort([
                'model' => 'ASC',
                'product' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(ModelField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ProductField::getField();
        yield ModelField::getField();
    }
}
