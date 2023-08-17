<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * Distributor
 *
 * @ORM\Table(name="distributor", uniqueConstraints={@ORM\UniqueConstraint(name="distributor_code_ux", columns={"code"})})
 * @ORM\Entity(repositoryClass="App\Repository\DistributorRepository")
 */
class Distributor extends CaptionWithCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="distributor_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
