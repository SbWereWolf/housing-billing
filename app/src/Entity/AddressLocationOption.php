<?php

namespace App\Entity;

use App\Entity\Column\HasAddress;
use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasLocationOption;
use Doctrine\ORM\Mapping as ORM;

/**
 * AddressLocationOption
 *
 * @ORM\Table(name="address_location_option")
 * @ORM\Entity(repositoryClass="App\Repository\AddressLocationOptionRepository")
 */
class AddressLocationOption implements \Stringable
{
    use HasAddress;
    use HasBillingOption;
    use HasLocationOption;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="address_location_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return "{$this->address} {$this->locationOption} {$this->billingOption}";
    }
}
