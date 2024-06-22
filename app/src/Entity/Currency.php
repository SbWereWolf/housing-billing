<?php

namespace App\Entity;

use App\Entity\Column\HasUnitsOfMeasure;
use App\Repository\CurrencyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * Currency
 */
#[ORM\Table(name: 'currency')]
#[ORM\UniqueConstraint(name: 'currency_units_of_measure_id_ux', columns: ['units_of_measure_id'])]
#[ORM\Entity(repositoryClass: CurrencyRepository::class)]
class Currency
{
    use HasUnitsOfMeasure;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'currency_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }


}
