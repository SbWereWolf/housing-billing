<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Entity\RelatedProduct;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class RelatedProductCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return RelatedProduct::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Взаимосвязанные услуги')
            ->setEntityLabelInSingular('Взаимосвязанные услуги')
            ->setDefaultSort([
                'parent' => 'ASC',
                'child' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(EntityFilter::new('parent', 'Основная'))
            ->add(EntityFilter::new('child', 'Взаимосвязанная'));
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AssociationField::new('parent', 'Основная')
            ->setCrudController(ProductCrudController::class);
        yield AssociationField::new('child', 'Взаимосвязанная')
            ->setCrudController(ProductCrudController::class);
    }
}
