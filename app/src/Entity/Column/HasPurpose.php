<?php

namespace App\Entity\Column;

use App\Entity\ReadingsPurpose;
use Doctrine\ORM\Mapping as ORM;

trait HasPurpose
{
    /**
     * @var ReadingsPurpose
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\ReadingsPurpose")
     * @ORM\JoinColumn(name="readings_purpose_id")
     */
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