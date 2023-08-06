<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Distributor
 *
 * @ORM\Table(name="distributor", uniqueConstraints={@ORM\UniqueConstraint(name="distributor_code_ux", columns={"code"})})
 * @ORM\Entity(repositoryClass="App\Repository\DistributorRepository")
 */
class Distributor
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

    /**
     * @var int|null
     *
     * @ORM\Column(name="title", type="bigint", nullable=true)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="code", type="bigint", nullable=false)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="remark", type="bigint", nullable=true)
     */
    private $remark;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): static
    {
        $this->remark = $remark;

        return $this;
    }


}
