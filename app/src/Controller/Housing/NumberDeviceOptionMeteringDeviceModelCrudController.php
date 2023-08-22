<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\DeviceOptionField;
use App\Controller\Fields\ModelField;
use App\Entity\NumberDeviceOptionMeteringDeviceModel;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;

class NumberDeviceOptionMeteringDeviceModelCrudController
    extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return NumberDeviceOptionMeteringDeviceModel::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural(
                'Числовые значения параметров моделей приборов учёта'
            )
            ->setEntityLabelInSingular(
                'Числовое значение параметра модели приборов учёта'
            )
            ->setDefaultSort([
                'model' => 'ASC',
                'deviceOption' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ModelField::getFilter())
            ->add(DeviceOptionField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ModelField::getField();
        yield DeviceOptionField::getField();
    }
}
