<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AccountField;
use App\Controller\Fields\CustomerField;
use App\Controller\Fields\ProductField;
use App\Entity\ProductPersonalAccount;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ProductPersonalAccountCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ProductPersonalAccount::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Услуги для лицевых счётов'
            )
            ->setEntityLabelInSingular(
                'Услуга для лицевого счёта'
            )
            ->setDefaultSort([
                'product' => 'ASC',
                'customer' => 'ASC',
                'account' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ProductField::getFilter())
            ->add(CustomerField::getFilter())
            ->add(AccountField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ProductField::getField();
        yield CustomerField::getField();
        yield AccountField::getField();
    }
}
