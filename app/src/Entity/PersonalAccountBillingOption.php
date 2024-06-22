<?php

namespace App\Entity;

use App\Entity\Column\HasAccountOption;
use App\Entity\Column\HasBillingOption;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccountBillingOption
 */
#[ORM\Table(name: 'personal_account_billing_option')]
#[ORM\UniqueConstraint(name: 'personal_account_billing_option_billing_account_option_ux', columns: ['billing_option_id', 'personal_account_option_id'])]
#[ORM\UniqueConstraint(name: 'personal_account_billing_option_billing_option_id_ux', columns: ['billing_option_id'])]
#[ORM\Entity(repositoryClass: \App\Repository\PersonalAccountBillingOptionRepository::class)]
class PersonalAccountBillingOption
{
    use HasAccountOption;
    use HasBillingOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'personal_account_billing_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
