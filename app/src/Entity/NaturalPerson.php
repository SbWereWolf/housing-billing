<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * NaturalPerson
 *
 * @ORM\Table(name="natural_person", uniqueConstraints={@ORM\UniqueConstraint(name="natural_person_customer_id_ux", columns={"customer_id"})})
 * @ORM\Entity
 */
class NaturalPerson
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="natural_person_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="customer_id", type="bigint", nullable=false)
     */
    private $customerId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    public function setCustomerId(string $customerId): static
    {
        $this->customerId = $customerId;

        return $this;
    }


}
