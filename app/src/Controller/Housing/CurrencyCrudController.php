<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\UnitsOfMeasureField;
use App\Entity\Currency;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class CurrencyCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return Currency::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Валюты')
            ->setEntityLabelInSingular('Валюта')
            ->setDefaultSort([
                'unitsOfMeasure' => 'ASC',
                'id' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(UnitsOfMeasureField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield UnitsOfMeasureField::getField();
    }
}
