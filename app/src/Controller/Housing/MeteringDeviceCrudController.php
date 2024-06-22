<?php

namespace App\Controller\Housing;

use App\Controller\Base\EntityWithIdController;
use App\Controller\Fields\DistributionPointField;
use App\Controller\Fields\DistributorField;
use App\Controller\Fields\ModelField;
use App\Controller\Fields\ProductField;
use App\Entity\MeteringDevice;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\DateTimeFilter;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

class MeteringDeviceCrudController extends EntityWithIdController
{
    public static function getEntityFqcn(): string
    {
        return MeteringDevice::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setEntityLabelInPlural('Приборы учёта')
            ->setEntityLabelInSingular('Прибор учёта')
            ->setDefaultSort([
                'model' => 'ASC',
                'product' => 'ASC',
                'distributor' => 'ASC',
                'distributionPoint' => 'ASC',
                'start' => 'ASC',
                'serial' => 'ASC',
            ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TextFilter::new('start', 'Поверка'))
            ->add(DateTimeFilter::new('finish', 'Окончание'))
            ->add(TextFilter::new('serial', 'Серийный номер'))
            ->add(ModelField::getFilter())
            ->add(ProductField::getFilter())
            ->add(DistributorField::getFilter())
            ->add(DistributionPointField::getFilter());
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = parent::configureFields($pageName);
        foreach ($fields as $field) {
            /** @var Field $field */

            yield $field;
        }

        yield TextField::new('serial', 'Серийный номер');
        yield ModelField::getField();
        yield ProductField::getField();
        yield DistributorField::getField();
        yield DistributionPointField::getField();
    }
}
