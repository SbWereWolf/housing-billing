<?php

namespace App\Controller\Base;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

class EntityWithIdController
    extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return '';
    }

    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(NumericFilter::new('id', '№'));
    }

    protected function getBaseFields(string $pageName): array
    {
        $result = [];

        if (
            $pageName !== Crud::PAGE_NEW &&
            $pageName !== Crud::PAGE_EDIT
        ) {
            $result[] = TextField::new('id', '№');
        }

        return $result;
    }
}
