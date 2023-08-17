<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AddressField;
use App\Controller\Fields\BillingOptionField;
use App\Controller\Fields\LocationOptionField;
use App\Entity\AddressLocationOption;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class AddressLocationOptionCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return AddressLocationOption::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Параметры адреса')
            ->setEntityLabelInSingular('Параметр адреса')
            ->setDefaultSort([
                'address' => 'ASC',
                'locationOption' => 'ASC',
                'billingOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(AddressField::getFilter())
            ->add(LocationOptionField::getFilter())
            ->add(BillingOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AddressField::getField();
        yield LocationOptionField::getField();
        yield BillingOptionField::getField();
    }
}
