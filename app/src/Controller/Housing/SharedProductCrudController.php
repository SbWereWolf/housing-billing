<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Entity\SharedProduct;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class SharedProductCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return SharedProduct::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Услуги по содержанию общего имущества'
            )
            ->setEntityLabelInSingular(
                'Услуга по содержанию общего имущества'
            )
            ->setDefaultSort([
                'shared' => 'ASC',
                'individual' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(
                EntityFilter::new(
                    'shared',
                    'Услуга по содержанию общего имущества'
                )
            )
            ->add(
                EntityFilter::new(
                    'individual',
                    'Связанная услуга для собственника'
                )
            );
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AssociationField::new(
            'shared',
            'Услуга по содержанию общего имущества'
        )
            ->setCrudController(ProductCrudController::class);
        yield AssociationField::new(
            'individual',
            'Связанная услуга для собственника'
        )
            ->setCrudController(ProductCrudController::class);
    }
}
