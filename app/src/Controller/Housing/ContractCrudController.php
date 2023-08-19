<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\CustomerField;
use App\Entity\Contract;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ContractCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return Contract::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Договоры')
            ->setEntityLabelInSingular('Договор')
            ->setDefaultSort([
                'customer' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(CustomerField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield CustomerField::getField();
    }
}
