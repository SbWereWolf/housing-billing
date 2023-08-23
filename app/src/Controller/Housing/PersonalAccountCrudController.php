<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\ContractField;
use App\Controller\Fields\CustomerField;
use App\Entity\PersonalAccount;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class PersonalAccountCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccount::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Лицевые счета')
            ->setEntityLabelInSingular('Лицевой счет')
            ->setDefaultSort([
                'customer' => 'ASC',
                'contract' => 'ASC',
                'publicAccount' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(CustomerField::getFilter())
            ->add(ContractField::getFilter())
            ->add(
                TextFilter::new(
                    'publicAccount',
                    'Номер лицевого счёта'
                )
            );
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield CustomerField::getField();
        yield ContractField::getField();
        yield TextField::new('publicAccount', 'Номер лицевого счёта');
    }
}
