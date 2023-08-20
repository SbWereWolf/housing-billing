<?php

namespace App\Entity;

use App\Entity\Column\HasContract;
use App\Entity\Column\HasCustomer;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccount
 *
 * @ORM\Table(name="personal_account", uniqueConstraints={@ORM\UniqueConstraint(name="personal_account_customer_id_id_ux", columns={"customer_id", "id"}), @ORM\UniqueConstraint(name="personal_account_contract_id_id_ux", columns={"contract_id", "id"})})
 * @ORM\Entity(repositoryClass="App\Repository\PersonalAccountRepository")
 */
class PersonalAccount implements \Stringable
{
    use HasCustomer;
    use HasContract;
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
     * @var string|null
     *
     * @ORM\Column(name="public_account", type="text", nullable=true)
     */
    private $publicAccount;

    public function getId(): ?string
    {
        return $this->id;
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

    public function __toString(): string
    {
        return "{$this->publicAccount} {$this->getContract()}";
    }
}
