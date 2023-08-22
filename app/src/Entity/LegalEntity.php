<?php

namespace App\Entity;

use App\Entity\Column\HasCustomer;
use Doctrine\ORM\Mapping as ORM;

/**
 * LegalEntity
 *
 * @ORM\Table(name="legal_entity", uniqueConstraints={@ORM\UniqueConstraint(name="legal_entity_customer_id_ux", columns={"customer_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\LegalEntityRepository")
 */
class LegalEntity
{
    use HasCustomer;
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="legal_entity_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
