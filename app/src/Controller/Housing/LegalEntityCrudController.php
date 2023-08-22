<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\CustomerField;
use App\Entity\LegalEntity;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class LegalEntityCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return LegalEntity::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Юридические лица')
            ->setEntityLabelInSingular('Юридическое лицо')
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
