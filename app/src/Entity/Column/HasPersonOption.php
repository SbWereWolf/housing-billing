<?php

namespace App\Entity\Column;

use App\Entity\NaturalPersonOption;
use Doctrine\ORM\Mapping as ORM;

trait HasPersonOption
{
    /**
     * @var NaturalPersonOption
     */
    #[ORM\JoinColumn(name: 'natural_person_option_id')]
    #[ORM\ManyToOne(targetEntity: NaturalPersonOption::class)]
    protected NaturalPersonOption $personOption;

    public function getPersonOption(): NaturalPersonOption
    {
        return $this->personOption;
    }

    public function setPersonOption(
        NaturalPersonOption $personOption
    ): static {
        $this->personOption = $personOption;

        return $this;
    }
}