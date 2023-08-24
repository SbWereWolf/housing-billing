<?php

namespace App\Controller\Fields;

use App\Controller\Housing\ReadingsSenderCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Field\FieldInterface;
use EasyCorp\Bundle\EasyAdminBundle\Contracts\Filter\FilterInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class SenderField
{
    public static function getFilter(): FilterInterface
    {
        return EntityFilter::new('sender', 'Отправитель');
    }

    public static function getField(): FieldInterface
    {
        return AssociationField::new('sender', 'Отправитель')
            ->setCrudController(ReadingsSenderCrudController::class);
    }
}