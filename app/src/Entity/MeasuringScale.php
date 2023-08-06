<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * MeasuringScale
 *
 * @ORM\Table(name="measuring_scale", uniqueConstraints={@ORM\UniqueConstraint(name="measuring_scale_code_ux", columns={"code"})})
 * @ORM\Entity
 */
class MeasuringScale
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="measuring_scale_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="text", nullable=true)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="remark", type="text", nullable=true)
     */
    private $remark;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_limit", type="bigint", nullable=true)
     */
    private $readingsLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_resolution", type="bigint", nullable=true)
     */
    private $readingsResolution;

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

    public function setCode(?string $code): static
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

    public function getReadingsLimit(): ?string
    {
        return $this->readingsLimit;
    }

    public function setReadingsLimit(?string $readingsLimit): static
    {
        $this->readingsLimit = $readingsLimit;

        return $this;
    }

    public function getReadingsResolution(): ?string
    {
        return $this->readingsResolution;
    }

    public function setReadingsResolution(?string $readingsResolution): static
    {
        $this->readingsResolution = $readingsResolution;

        return $this;
    }


}
