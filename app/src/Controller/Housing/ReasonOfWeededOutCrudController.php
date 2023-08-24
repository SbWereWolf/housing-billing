<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\TestingRuleField;
use App\Controller\Fields\TestingRunField;
use App\Controller\Fields\TestingSetField;
use App\Entity\ReasonOfWeededOut;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ReasonOfWeededOutCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ReasonOfWeededOut::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Причины отклонения показаний')
            ->setEntityLabelInSingular('Причина отклонения показаний')
            ->setDefaultSort([
                'testingRun' => 'ASC',
                'testingSet' => 'ASC',
                'rule' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TestingRunField::getFilter())
            ->add(TestingSetField::getFilter())
            ->add(TestingRuleField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TestingRunField::getField();
        yield TestingSetField::getField();
        yield TestingRuleField::getField();
    }
}
