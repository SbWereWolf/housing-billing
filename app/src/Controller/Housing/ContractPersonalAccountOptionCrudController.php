<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AccountField;
use App\Controller\Fields\AccountOptionField;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\ContractField;
use App\Entity\ContractPersonalAccountOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ContractPersonalAccountOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ContractPersonalAccountOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Параметры лицевых счетов для начислений'
            )
            ->setEntityLabelInSingular(
                'Параметр лицевого счета для начислений'
            )
            ->setDefaultSort([
                'contract' => 'ASC',
                'account' => 'ASC',
                'accountOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ContractField::getFilter())
            ->add(AccountField::getFilter())
            ->add(AccountOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ContractField::getField();
        yield AccountField::getField();
        yield AccountOptionField::getField();
        yield BillingOptionField::getField();
    }
}
