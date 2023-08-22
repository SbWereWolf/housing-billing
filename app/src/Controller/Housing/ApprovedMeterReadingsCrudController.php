<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingPeriodField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\RawReadingsField;
use App\Controller\Fields\TestingRunField;
use App\Controller\Fields\TestingSetField;
use App\Entity\ApprovedMeterReadings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ApprovedMeterReadingsCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ApprovedMeterReadings::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Одобренные показания')
            ->setEntityLabelInSingular('Одобренные показания')
            ->setDefaultSort([
                'year' => 'ASC',
                'month' => 'ASC',
                'testingRun' => 'ASC',
                'testingSet' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(TestingRunField::getFilter())
            ->add(TestingSetField::getFilter())
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter())
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield RawReadingsField::getField();
        yield BillingPeriodField::getYearField();
        yield BillingPeriodField::getMonthField();
        yield TestingRunField::getField();
        yield TestingSetField::getField();
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
    }
}
