<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AccountOptionField;
use App\Controller\Fields\BillingOptionField;
use App\Entity\PersonalAccountBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class PersonalAccountBillingOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccountBillingOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для лицевых счетов'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для лицевых счетов'
            )
            ->setDefaultSort([
                'accountOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(AccountOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AccountOptionField::getField();
        yield BillingOptionField::getField();
    }
}
