<?php

namespace App\Controller\Admin;

use App\Entity\AddressDistributionPoint;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class AddressDistributionPointCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AddressDistributionPoint::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Адреса и их точки поставки')
            ->setEntityLabelInSingular('Точка поставки для Адреса')
            ->setDefaultSort([
                'address' => 'ASC',
                'distributionPoint' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(NumericFilter::new('id', '№'))
            ->add(EntityFilter::new('address', 'Адреса'))
            ->add(EntityFilter::new('distributionPoint', 'Точка поставки'));
    }

    public function configureFields(string $pageName): iterable
    {
        yield TextField::new('id', '№');
        yield AssociationField::
        new(
            'address',
            'Адрес'
        )
            ->setCrudController(AddressCrudController::class);
        yield AssociationField::
        new(
            'distributionPoint',
            'Точка поставки'
        )
            ->setCrudController(DistributionPointCrudController::class);
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
