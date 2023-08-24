<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\TestingRuleField;
use App\Controller\Fields\TestingSetField;
use App\Entity\TestingRuleSet;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class TestingRuleSetCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return TestingRuleSet::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Список правил для отбора показаний'
            )
            ->setEntityLabelInSingular(
                'Пункт списка правил для отбора показаний'
            )
            ->setDefaultSort([
                'testingSet' => 'ASC',
                'rule' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TestingSetField::getFilter())
            ->add(TestingRuleField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TestingSetField::getField();
        yield TestingRuleField::getField();
    }
}
