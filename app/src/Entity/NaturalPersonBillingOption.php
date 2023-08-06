<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * NaturalPersonBillingOption
 *
 * @ORM\Table(name="natural_person_billing_option", uniqueConstraints={@ORM\UniqueConstraint(name="natural_person_billing_option_billing_option_natural_option_ux", columns={"billing_option_id", "natural_person_option_id"}), @ORM\UniqueConstraint(name="natural_person_billing_option_billing_option_id_ux", columns={"billing_option_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\NaturalPersonBillingOptionRepository")
 */
class NaturalPersonBillingOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="natural_person_billing_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="natural_person_option_id", type="bigint", nullable=true)
     */
    private $naturalPersonOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="billing_option_id", type="bigint", nullable=true)
     */
    private $billingOptionId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNaturalPersonOptionId(): ?string
    {
        return $this->naturalPersonOptionId;
    }

    public function setNaturalPersonOptionId(?string $naturalPersonOptionId): static
    {
        $this->naturalPersonOptionId = $naturalPersonOptionId;

        return $this;
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


}
