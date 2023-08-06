<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceOption
 *
 * @ORM\Table(name="device_option", uniqueConstraints={@ORM\UniqueConstraint(name="device_option_code_ux", columns={"code"})})
 * @ORM\Entity
 */
class DeviceOption
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="device_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="title", type="integer", nullable=true)
     */
    private $title;

    /**
     * @var int|null
     *
     * @ORM\Column(name="code", type="integer", nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="remark", type="integer", nullable=true)
     */
    private $remark;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?int
    {
        return $this->title;
    }

    public function setTitle(?int $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(?int $code): static
    {
        $this->code = $code;

        return $this;
    }

    public function getRemark(): ?int
    {
        return $this->remark;
    }

    public function setRemark(?int $remark): static
    {
        $this->remark = $remark;

        return $this;
    }


}
