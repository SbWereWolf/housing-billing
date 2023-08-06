<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * LocationBillingOption
 *
 * @ORM\Table(name="location_billing_option", uniqueConstraints={@ORM\UniqueConstraint(name="location_billing_option_billing_option_id_location_option_id_ui", columns={"billing_option_id", "location_option_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\LocationBillingOptionRepository")
 */
class LocationBillingOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="location_billing_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_option_id", type="bigint", nullable=true)
     */
    private $billingOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="location_option_id", type="bigint", nullable=true)
     */
    private $locationOptionId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getBillingOptionId(): ?string
    {
        return $this->billingOptionId;
    }

    public function setBillingOptionId(?string $billingOptionId): static
    {
        $this->billingOptionId = $billingOptionId;

        return $this;
    }

    public function getLocationOptionId(): ?string
    {
        return $this->locationOptionId;
    }

    public function setLocationOptionId(?string $locationOptionId): static
    {
        $this->locationOptionId = $locationOptionId;

        return $this;
    }


}
