<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * LegalEntityBillingOption
 *
 * @ORM\Table(name="legal_entity_billing_option", uniqueConstraints={@ORM\UniqueConstraint(name="legal_entity_billing_option_billing_option_legal_option_ux", columns={"billing_option_id", "legal_entity_option_id"})})
 * @ORM\Entity
 */
class LegalEntityBillingOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="legal_entity_billing_option_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="legal_entity_option_id", type="bigint", nullable=true)
     */
    private $legalEntityOptionId;

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

    public function getLegalEntityOptionId(): ?string
    {
        return $this->legalEntityOptionId;
    }

    public function setLegalEntityOptionId(?string $legalEntityOptionId): static
    {
        $this->legalEntityOptionId = $legalEntityOptionId;

        return $this;
    }


}
