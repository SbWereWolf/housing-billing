<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\SenderField;
use App\Controller\Fields\WayField;
use App\Entity\ReadingsSenderReadingsWay;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class ReadingsSenderReadingsWayCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return ReadingsSenderReadingsWay::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Способы отправки показаний для отправителей'
            )
            ->setEntityLabelInSingular(
                'Способ отправки показаний для отправителя'
            )
            ->setDefaultSort([
                'sender' => 'ASC',
                'way' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(SenderField::getFilter())
            ->add(WayField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield SenderField::getField();
        yield WayField::getField();
    }
}
