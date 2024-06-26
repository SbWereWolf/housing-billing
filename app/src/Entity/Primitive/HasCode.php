<?php

namespace App\Entity\Primitive;

use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Pure;

trait HasCode
{
    /**
     * @var string|null
     */
    #[ORM\Column(name: 'title', type: 'text', nullable: true)]
    protected $title;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'code', type: 'text', nullable: true)]
    protected $code;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'remark', type: 'text', nullable: true)]
    protected $remark;

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

    #[Pure]
    public function __toString(): string
    {
        return "{$this->title}, {$this->code}";
    }
}