<?php

namespace App\Entity;

use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasCustomer;
use App\Entity\Column\HasEntityOption;
use App\Repository\CustomerLegalEntityOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerLegalEntityOption
 */
#[ORM\Table(name: 'customer_legal_entity_option')]
#[ORM\Entity(repositoryClass: CustomerLegalEntityOptionRepository::class)]
class CustomerLegalEntityOption
{
    use HasCustomer;
    use HasEntityOption;
    use HasBillingOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'customer_legal_entity_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
