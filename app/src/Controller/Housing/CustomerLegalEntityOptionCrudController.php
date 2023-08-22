<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\CustomerField;
use App\Controller\Fields\EntityOptionField;
use App\Entity\CustomerLegalEntityOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class CustomerLegalEntityOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return CustomerLegalEntityOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для потребителей юридических лиц'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для потребителя юридического лица'
            )
            ->setDefaultSort([
                'customer' => 'ASC',
                'entityOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(CustomerField::getFilter())
            ->add(EntityOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield CustomerField::getField();
        yield EntityOptionField::getField();
        yield BillingOptionField::getField();
    }
}
