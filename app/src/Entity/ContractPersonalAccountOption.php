<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ContractPersonalAccountOption
 *
 * @ORM\Table(name="contract_personal_account_option")
 * @ORM\Entity
 */
class ContractPersonalAccountOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="contract_personal_account_option_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="personal_account_option_id", type="bigint", nullable=true)
     */
    private $personalAccountOptionId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_id", type="bigint", nullable=true)
     */
    private $contractId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="personal_account_id", type="bigint", nullable=true)
     */
    private $personalAccountId;

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

    public function getPersonalAccountOptionId(): ?string
    {
        return $this->personalAccountOptionId;
    }

    public function setPersonalAccountOptionId(?string $personalAccountOptionId): static
    {
        $this->personalAccountOptionId = $personalAccountOptionId;

        return $this;
    }

    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    public function setContractId(?string $contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function getPersonalAccountId(): ?string
    {
        return $this->personalAccountId;
    }

    public function setPersonalAccountId(?string $personalAccountId): static
    {
        $this->personalAccountId = $personalAccountId;

        return $this;
    }


}
