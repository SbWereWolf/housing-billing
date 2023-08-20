<?php

namespace App\Entity\Column;

use App\Entity\PersonalAccount;
use Doctrine\ORM\Mapping as ORM;

trait HasAccount
{
    /**
     * @var PersonalAccount
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\PersonalAccount")
     * @ORM\JoinColumn(name="personal_account_id")
     */
    protected PersonalAccount $account;

    public function getAccount(): PersonalAccount
    {
        return $this->account;
    }

    public function setAccount(
        PersonalAccount $account
    ): static {
        $this->account = $account;

        return $this;
    }
}