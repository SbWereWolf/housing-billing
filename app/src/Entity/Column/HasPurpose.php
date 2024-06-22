<?php

namespace App\Entity\Column;

use App\Entity\ReadingsPurpose;
use Doctrine\ORM\Mapping as ORM;

trait HasPurpose
{
    /**
     * @var ReadingsPurpose
     */
    #[ORM\JoinColumn(name: 'readings_purpose_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\ReadingsPurpose::class)]
    protected ReadingsPurpose $purpose;

    public function getPurpose(): ReadingsPurpose
    {
        return $this->purpose;
    }

    public function setPurpose(
        ReadingsPurpose $purpose
    ): static {
        $this->purpose = $purpose;

        return $this;
    }
}