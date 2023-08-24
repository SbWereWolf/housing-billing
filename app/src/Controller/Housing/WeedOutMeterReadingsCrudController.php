<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\RawReadingsField;
use App\Controller\Fields\TestingRuleField;
use App\Controller\Fields\TestingRunField;
use App\Controller\Fields\TestingSetField;
use App\Entity\WeedOutMeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class WeedOutMeterReadingsCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return WeedOutMeterReadings::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Отклонённые показания')
            ->setEntityLabelInSingular('Отклонённое показания')
            ->setDefaultSort([
                'testingRun' => 'ASC',
                'testingSet' => 'ASC',
                'rule' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TestingRunField::getFilter())
            ->add(TestingSetField::getFilter())
            ->add(TestingRuleField::getFilter())
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter())
            ->add(RawReadingsField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TestingRunField::getField();
        yield TestingSetField::getField();
        yield TestingRuleField::getField();
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
        yield RawReadingsField::getField();
    }
}
