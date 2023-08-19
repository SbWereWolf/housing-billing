<?php

namespace App\Controller\Base;

use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\TextFilter;

abstract class EntityWithCaptionController
    extends EntityWithIdController
{
    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setDefaultSort([
            'code' => 'ASC',
            'id' => 'ASC',
        ]);
    }

    public function configureFilters(Filters $filters): Filters
    {
        return parent::configureFilters($filters)
            ->add(TextFilter::new('title', 'Название'))
            ->add(TextFilter::new('code', 'Мнемоника'))
            ->add(TextFilter::new('remark', 'Примечание'))
            ;
    }

    public function configureFields(string $pageName): iterable
    {
        $fields = $this->getBaseFields($pageName);
        foreach ($fields as $field) {
            yield $field;
        }

        yield TextareaField::new('title', 'Название');
        yield TextareaField::new('code', 'Мнемоника');
        yield TextareaField::new('remark', 'Примечание');
    }
}
