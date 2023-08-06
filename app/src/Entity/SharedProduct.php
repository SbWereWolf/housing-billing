<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * SharedProduct
 *
 * @ORM\Table(name="shared_product")
 * @ORM\Entity
 */
class SharedProduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="shared_product_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="shared_product_id", type="bigint", nullable=false)
     */
    private $sharedProductId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="individual_product_id", type="bigint", nullable=true)
     */
    private $individualProductId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSharedProductId(): ?string
    {
        return $this->sharedProductId;
    }

    public function setSharedProductId(string $sharedProductId): static
    {
        $this->sharedProductId = $sharedProductId;

        return $this;
    }

    public function getIndividualProductId(): ?string
    {
        return $this->individualProductId;
    }

    public function setIndividualProductId(?string $individualProductId): static
    {
        $this->individualProductId = $individualProductId;

        return $this;
    }


}
