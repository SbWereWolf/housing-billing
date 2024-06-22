<?php

namespace App\Entity\Column;

use App\Entity\PersonalAccount;
use Doctrine\ORM\Mapping as ORM;

trait HasAccount
{
    /**
     * @var PersonalAccount
     */
    #[ORM\JoinColumn(name: 'personal_account_id')]
    #[ORM\ManyToOne(targetEntity: PersonalAccount::class)]
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