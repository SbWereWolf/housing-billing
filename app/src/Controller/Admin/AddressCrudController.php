<?php

namespace App\Controller\Admin;

use App\Entity\Address;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class AddressCrudController extends AbstractCrudController
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
        return $filters
            ->add(TextFilter::new('title','Название'))
            ->add(TextFilter::new('code','Мнемоника'));
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
