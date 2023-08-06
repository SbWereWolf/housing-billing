<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccountBillingOption
 *
 * @ORM\Table(name="personal_account_billing_option", uniqueConstraints={@ORM\UniqueConstraint(name="personal_account_billing_option_billing_account_option_ux", columns={"billing_option_id", "personal_account_option_id"}), @ORM\UniqueConstraint(name="personal_account_billing_option_billing_option_id_ux", columns={"billing_option_id"})})
 * @ORM\Entity
 */
class PersonalAccountBillingOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_account_billing_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="personal_account_option_id", type="bigint", nullable=true)
     */
    private $personalAccountOptionId;

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

    public function getPersonalAccountOptionId(): ?string
    {
        return $this->personalAccountOptionId;
    }

    public function setPersonalAccountOptionId(?string $personalAccountOptionId): static
    {
        $this->personalAccountOptionId = $personalAccountOptionId;

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
