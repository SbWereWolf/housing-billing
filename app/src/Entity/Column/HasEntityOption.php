<?php

namespace App\Entity\Column;

use App\Entity\LegalEntityOption;
use Doctrine\ORM\Mapping as ORM;

trait HasEntityOption
{
    /**
     * @var LegalEntityOption
     */
    #[ORM\JoinColumn(name: 'legal_entity_option_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\LegalEntityOption::class)]
    protected LegalEntityOption $entityOption;

    public function getEntityOption(): LegalEntityOption
    {
        return $this->entityOption;
    }

    public function setEntityOption(
        LegalEntityOption $entityOption
    ): static {
        $this->entityOption = $entityOption;

        return $this;
    }
}