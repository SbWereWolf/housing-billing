<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\CustomerField;
use App\Entity\NaturalPerson;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class NaturalPersonCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return NaturalPerson::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Физические лица')
            ->setEntityLabelInSingular('Физическое лицо')
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
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield CustomerField::getField();
    }
}
