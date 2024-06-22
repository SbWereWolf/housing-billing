<?php

namespace App\Entity\Column;

use App\Entity\Contract;
use Doctrine\ORM\Mapping as ORM;

trait HasContract
{
    /**
     * @var Contract
     */
    #[ORM\JoinColumn(name: 'contract_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\Contract::class)]
    protected Contract $contract;

    public function getContract(): Contract
    {
        return $this->contract;
    }

    public function setContract(
        Contract $contract
    ): static {
        $this->contract = $contract;

        return $this;
    }
}