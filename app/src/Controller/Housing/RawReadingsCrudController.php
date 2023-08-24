<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ModelField;
use App\Controller\Fields\ProductField;
use App\Controller\Fields\SenderField;
use App\Controller\Fields\WayField;
use App\Entity\RawReadings;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\NumericFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class RawReadingsCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return RawReadings::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Полученные показания')
            ->setEntityLabelInSingular('Полученное показание')
            ->setDefaultSort([
                'modelScale' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
                'uploadTime' => 'ASC',
                'sender' => 'ASC',
                'way' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(ModelField::getFilter())
            ->add(
                EntityFilter::new('modelScale', 'Шкала прибора учёта')
            )
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter())
            ->add(DateTimeFilter::new('uploadTime', 'Время отправки'))
            ->add(TextFilter::new('readings', 'Показания'))
            ->add(NumericFilter::new('isScaleOverflow', 'Перекрут'))
            ->add(SenderField::getFilter())
            ->add(WayField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield ModelField::getField();
        yield AssociationField::new(
            'modelScale',
            'Шкала прибора учёта'
        )
            ->setCrudController(DeviceModelScaleCrudController::class);
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
        yield SenderField::getField();
        yield WayField::getField();
    }
}
