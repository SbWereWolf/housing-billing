<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccount
 *
 * @ORM\Table(name="personal_account", uniqueConstraints={@ORM\UniqueConstraint(name="personal_account_customer_id_id_ux", columns={"customer_id", "id"}), @ORM\UniqueConstraint(name="personal_account_contract_id_id_ux", columns={"contract_id", "id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonalAccountRepository")
 */
class PersonalAccount
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_account_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="contract_id", type="bigint", nullable=true)
     */
    private $contractId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="public_account", type="text", nullable=true)
     */
    private $publicAccount;

    /**
     * @var int|null
     *
     * @ORM\Column(name="customer_id", type="bigint", nullable=true)
     */
    private $customerId;

    public function getId(): ?string
    {
        return $this->id;
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

    public function getPublicAccount(): ?string
    {
        return $this->publicAccount;
    }

    public function setPublicAccount(?string $publicAccount): static
    {
        $this->publicAccount = $publicAccount;

        return $this;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(?string $customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }


}
