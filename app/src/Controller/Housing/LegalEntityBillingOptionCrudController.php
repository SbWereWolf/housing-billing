<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\EntityOptionField;
use App\Entity\LegalEntityBillingOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class LegalEntityBillingOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntityBillingOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры начислений для юридических лиц'
            )
            ->setEntityLabelInSingular(
                'Параметр начислений для юридических лиц'
            )
            ->setDefaultSort([
                'entityOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(EntityOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield EntityOptionField::getField();
        yield BillingOptionField::getField();
    }
}
