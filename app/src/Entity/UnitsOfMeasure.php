<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\UnitsOfMeasureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * UnitsOfMeasure
 */
#[ORM\Table(name: 'units_of_measure')]
#[ORM\UniqueConstraint(name: 'units_of_measure_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: UnitsOfMeasureRepository::class)]
class UnitsOfMeasure extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'units_of_measure_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
