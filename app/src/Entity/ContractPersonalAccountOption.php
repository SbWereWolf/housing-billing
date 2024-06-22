<?php

namespace App\Entity;

use App\Entity\Column\HasAccount;
use App\Entity\Column\HasAccountOption;
use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasContract;
use Doctrine\ORM\Mapping as ORM;

/**
 * ContractPersonalAccountOption
 */
#[ORM\Table(name: 'contract_personal_account_option')]
#[ORM\Entity(repositoryClass: \App\Repository\ContractPersonalAccountOptionRepository::class)]
class ContractPersonalAccountOption
{
    use HasBillingOption;
    use HasAccountOption;
    use HasContract;
    use HasAccount;
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'contract_personal_account_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
