<?php

namespace App\Entity;

use App\Entity\Column\HasAddress;
use App\Entity\Column\HasDistributionPoint;
use Doctrine\ORM\Mapping as ORM;

/**
 * AddressDistributionPoint
 *
 * @ORM\Table(name="address_distribution_point", uniqueConstraints={@ORM\UniqueConstraint(name="address_distribution_point_address_id_distribution_point_id_ux", columns={"address_id", "distribution_point_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\AddressDistributionPointRepository")
 */
class AddressDistributionPoint
{
    use HasAddress;
    use HasDistributionPoint;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="address_distribution_point_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
