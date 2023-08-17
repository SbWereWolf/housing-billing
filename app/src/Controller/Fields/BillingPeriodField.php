<?php

namespace App\Controller\Fields;

use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

class BillingPeriodField
{
    public static function getYearFilter(): FilterInterface
    {
        return NumericFilter::new('year', 'Год');
    }

    public static function getYearField(): FieldInterface
    {
        return NumberField::new('year', 'Год');
    }

    public static function getMonthFilter(): FilterInterface
    {
        return NumericFilter::new('month', 'Месяц');
    }

    public static function getMonthField(): FieldInterface
    {
        return NumberField::new('month', 'Месяц');
    }
}