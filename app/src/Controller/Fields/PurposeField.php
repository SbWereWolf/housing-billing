<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ReadingsPurposeCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class PurposeField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('purpose','Назначение показаний');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('purpose','Назначение показаний')
            ->setCrudController(ReadingsPurposeCrudController::class);
    }
}