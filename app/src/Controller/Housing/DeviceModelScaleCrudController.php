<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\ModelField;
use App\Controller\Fields\PurposeField;
use App\Controller\Fields\ScaleField;
use App\Controller\Fields\UnitsOfMeasureField;
use App\Entity\DeviceModelScale;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class DeviceModelScaleCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return DeviceModelScale::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Шкалы приборов учёта'
            )
            ->setEntityLabelInSingular(
                'Шкала прибора учёта'
            )
            ->setDefaultSort([
                'model' => 'ASC',
                'scale' => 'ASC',
                'unitsOfMeasure' => 'ASC',
                'purpose' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ModelField::getFilter())
            ->add(ScaleField::getFilter())
            ->add(UnitsOfMeasureField::getFilter())
            ->add(PurposeField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ModelField::getField();
        yield ScaleField::getField();
        yield UnitsOfMeasureField::getField();
        yield PurposeField::getField();
    }
}
