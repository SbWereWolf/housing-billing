<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\AccountField;
use App\Controller\Fields\AddressField;
use App\Controller\Fields\CustomerField;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ProductField;
use App\Entity\PersonalAccountShare;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

class PersonalAccountShareCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return PersonalAccountShare::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Доля лицевого счёта в потреблении'
            )
            ->setEntityLabelInSingular(
                'Доля лицевого счёта в потреблении'
            )
            ->setDefaultSort([
                'account' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
                'customer' => 'ASC',
                'address' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(AccountField::getFilter())
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter())
            ->add(AddressField::getFilter())
            ->add(CustomerField::getFilter())
            ->add(NumericFilter::new('shareDividend', 'Размер доли'))
            ->add(NumericFilter::new('shareDivisor', 'Всего долей'));
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield AccountField::getField();
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
        yield AddressField::getField();
        yield CustomerField::getField();
    }
}
