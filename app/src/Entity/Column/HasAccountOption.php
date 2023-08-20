<?php

namespace App\Entity\Column;

use App\Entity\PersonalAccountOption;
use Doctrine\ORM\Mapping as ORM;

trait HasAccountOption
{
    /**
     * @var PersonalAccountOption
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\PersonalAccountOption")
     * @ORM\JoinColumn(name="personal_account_option_id")
     */
    protected PersonalAccountOption $accountOption;

    public function getAccountOption(): PersonalAccountOption
    {
        return $this->accountOption;
    }

    public function setAccountOption(
        PersonalAccountOption $accountOption
    ): static {
        $this->accountOption = $accountOption;

        return $this;
    }
}