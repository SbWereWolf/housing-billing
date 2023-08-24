<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingPeriodField;
use App\Controller\Fields\TestingSetField;
use App\Entity\TestingRun;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;

class TestingRunCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return TestingRun::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Прогоны отбора показаний')
            ->setEntityLabelInSingular('Прогон отбора показаний')
            ->setDefaultSort([
                'year' => 'ASC',
                'month' => 'ASC',
                'startTime' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TestingSetField::getFilter())
            ->add(DateTimeFilter::new('startTime', 'Время начала'))
            ->add(BillingPeriodField::getYearFilter())
            ->add(BillingPeriodField::getMonthFilter())
            ->add(DateTimeFilter::new('remark', 'Примечание'));
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TestingSetField::getField();
        yield BillingPeriodField::getYearField();
        yield BillingPeriodField::getMonthField();
    }
}
