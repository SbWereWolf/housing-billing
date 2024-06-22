<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * DistributionPoint
 */
#[ORM\Table(name: 'distribution_point')]
#[ORM\Entity(repositoryClass: \App\Repository\DistributionPointRepository::class)]
class DistributionPoint implements \Stringable
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
