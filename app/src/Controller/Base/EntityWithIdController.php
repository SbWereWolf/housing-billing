<?php

namespace App\Controller\Base;

use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;

abstract class EntityWithIdController
    extends AbstractCrudController
{
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add(NumericFilter::new('id', '№'));
    }
}
