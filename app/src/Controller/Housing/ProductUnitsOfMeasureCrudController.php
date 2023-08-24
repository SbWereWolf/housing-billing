<?php

namespace App\Controller\Housing;

use App\Controller\Fields\ProductField;
use App\Controller\Fields\UnitsOfMeasureField;
use App\Entity\ProductUnitsOfMeasure;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductUnitsOfMeasureCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ProductUnitsOfMeasure::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Единицы измерения для услуг ЖКХ'
            )
            ->setEntityLabelInSingular(
                'Единица измерения для услуги ЖКХ'
            )
            ->setDefaultSort([
                'product' => 'ASC',
                'unitsOfMeasure' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(UnitsOfMeasureField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ProductField::getField();
        yield UnitsOfMeasureField::getField();
    }
}
