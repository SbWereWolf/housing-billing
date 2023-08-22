<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingPeriodField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\RawReadingsField;
use App\Controller\Fields\TestingRunField;
use App\Entity\MeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class MeterReadingsCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return MeterReadings::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Показания приборов учёта')
            ->setEntityLabelInSingular('Показания прибора учёта')
            ->setDefaultSort([
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
                'year' => 'ASC',
                'month' => 'ASC',
                'rawReadings' => 'ASC',
                'testingRun' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TestingRunField::getFilter())
            ->add(ProductField::getFilter())
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(DistributionPointField::getFilter())
            ->add(RawReadingsField::getFilter())
            ->add(DistributorField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TestingRunField::getField();
        yield ProductField::getField();
        yield BillingPeriodField::getYearField();
        yield BillingPeriodField::getMonthField();
        yield DistributionPointField::getField();
        yield RawReadingsField::getField();
        yield DistributorField::getField();
    }
}
