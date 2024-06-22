<?php

namespace App\Entity;

use App\Repository\DistributionPointRepository;
use Doctrine\ORM\Mapping as ORM;
use Stringable;

/**
 * DistributionPoint
 */
#[ORM\Table(name: 'distribution_point')]
#[ORM\Entity(repositoryClass: DistributionPointRepository::class)]
class DistributionPoint implements Stringable
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'distribution_point_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->id;
    }
}
