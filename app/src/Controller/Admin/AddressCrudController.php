<?php

namespace App\Controller\Admin;

use App\Controller\Base\EntityWithIdController;
use App\Entity\Address;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class AddressCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return Address::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Адреса')
            ->setEntityLabelInSingular('Адрес')
            ->setDefaultSort([
                'region' => 'ASC',
                'level1ObjectId' => 'ASC',
                'level2ObjectId' => 'ASC',
                'level3ObjectId' => 'ASC',
                'level4ObjectId' => 'ASC',
                'level5ObjectId' => 'ASC',
                'level6ObjectId' => 'ASC',
                'level7ObjectId' => 'ASC',
                'level8ObjectId' => 'ASC',
                'housesObjectguid' => 'ASC',
                'apartmentsObjectguid' => 'ASC',
                'roomsObjectguid' => 'ASC',
                'title' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(NumericFilter::new('region', 'Код региона'))
            ->add(TextFilter::new('title', 'Название'))
            ->add(TextFilter::new('code', 'Мнемоника'));
    }
}
