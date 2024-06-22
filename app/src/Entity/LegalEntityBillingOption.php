<?php

namespace App\Entity;

use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasEntityOption;
use App\Repository\LegalEntityBillingOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * LegalEntityBillingOption
 */
#[ORM\Table(name: 'legal_entity_billing_option')]
#[ORM\UniqueConstraint(name: 'legal_entity_billing_option_billing_option_legal_option_ux', columns: [
    'billing_option_id',
    'legal_entity_option_id'
])]
#[ORM\Entity(repositoryClass: LegalEntityBillingOptionRepository::class)]
class LegalEntityBillingOption
{
    use HasEntityOption;
    use HasBillingOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'legal_entity_billing_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
