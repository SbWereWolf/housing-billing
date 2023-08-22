<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\CustomerField;
use App\Controller\Fields\PersonalOptionField;
use App\Entity\CustomerNaturalPersonOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class CustomerNaturalPersonOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return CustomerNaturalPersonOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для потребителей физических лиц'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для потребителя физического лица'
            )
            ->setDefaultSort([
                'customer' => 'ASC',
                'personOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(CustomerField::getFilter())
            ->add(PersonalOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield CustomerField::getField();
        yield PersonalOptionField::getField();
        yield BillingOptionField::getField();
    }
}
