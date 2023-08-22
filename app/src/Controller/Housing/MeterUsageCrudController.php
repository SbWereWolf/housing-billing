<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingPeriodField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\UnitsOfMeasureField;
use App\Entity\MeterUsage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

class MeterUsageCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return MeterUsage::class;
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
                'unitsOfMeasure' => 'ASC',
                'volume' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(DistributionPointField::getFilter())
            ->add(NumericFilter::new('volume', 'Объём услуги'))
            ->add(UnitsOfMeasureField::getFilter())
            ->add(DistributorField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ProductField::getField();
        yield BillingPeriodField::getYearField();
        yield BillingPeriodField::getMonthField();
        yield NumberField::new('volume', 'Объём услуги');
        yield UnitsOfMeasureField::getField();
        yield DistributorField::getField();
    }
}
