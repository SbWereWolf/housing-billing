<?php

namespace App\Controller\Housing;

use App\Controller\Fields\AccountField;
use App\Controller\Fields\AddressField;
use App\Controller\Fields\BillingPeriodField;
use App\Controller\Fields\CustomerField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\UnitsOfMeasureField;
use App\Entity\PersonalProductUsage;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

class PersonalProductUsageCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return PersonalProductUsage::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Объёмы потребления лицевых счётов'
            )
            ->setEntityLabelInSingular(
                'Объём потребления лицевого счёта'
            )
            ->setDefaultSort([
                'year' => 'ASC',
                'month' => 'ASC',
                'product' => 'ASC',
                'unitsOfMeasure' => 'ASC',
                'customer' => 'ASC',
                'address' => 'ASC',
                'account' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(NumericFilter::new('volume', 'Объём'))
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter())
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(AccountField::getFilter())
            ->add(UnitsOfMeasureField::getFilter())
            ->add(AddressField::getFilter())
            ->add(CustomerField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield BillingPeriodField::getYearField();
        yield BillingPeriodField::getMonthField();
        yield ProductField::getField();
        yield UnitsOfMeasureField::getField();
        yield CustomerField::getField();
        yield AddressField::getField();
        yield AccountField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
    }
}
