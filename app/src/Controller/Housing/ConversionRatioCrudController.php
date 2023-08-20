<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Entity\ConversionRatio;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class ConversionRatioCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ConversionRatio::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Переводы для единиц измерения')
            ->setEntityLabelInSingular('Перевод для единиц измерения')
            ->setDefaultSort([
                'source' => 'ASC',
                'target' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(EntityFilter::new('source', 'Исходная'))
            ->add(EntityFilter::new('target', 'Целевая'));
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AssociationField::new('source', 'Исходная')
            ->setCrudController(UnitsOfMeasureCrudController::class);
        yield AssociationField::        new('target', 'Целевая')
            ->setCrudController(UnitsOfMeasureCrudController::class);
    }
}
