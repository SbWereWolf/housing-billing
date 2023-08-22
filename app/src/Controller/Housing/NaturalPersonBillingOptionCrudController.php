<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\PersonalOptionField;
use App\Entity\NaturalPersonBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class NaturalPersonBillingOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPersonBillingOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для физических лиц'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для физических лиц'
            )
            ->setDefaultSort([
                'personOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(PersonalOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield PersonalOptionField::getField();
        yield BillingOptionField::getField();
    }
}
