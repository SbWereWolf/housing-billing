<?php

namespace App\Entity;

use App\Entity\Column\HasCustomer;
use App\Repository\ContractRepository;
use Doctrine\ORM\Mapping as ORM;
use Stringable;

/**
 * Contract
 */
#[ORM\Table(name: 'contract')]
#[ORM\UniqueConstraint(name: 'contract_customer_id_id_ux', columns: ['customer_id', 'id'])]
#[ORM\Entity(repositoryClass: ContractRepository::class)]
class Contract implements Stringable
{
    use HasCustomer;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'contract_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return "{$this->getCustomer()}, №{$this->id}";
    }
}
