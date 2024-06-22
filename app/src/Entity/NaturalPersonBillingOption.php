<?php

namespace App\Entity;

use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasPersonOption;
use App\Repository\NaturalPersonBillingOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * NaturalPersonBillingOption
 */
#[ORM\Table(name: 'natural_person_billing_option')]
#[ORM\UniqueConstraint(name: 'natural_person_billing_option_billing_option_natural_option_ux', columns: [
    'billing_option_id',
    'natural_person_option_id'
])]
#[ORM\UniqueConstraint(name: 'natural_person_billing_option_billing_option_id_ux', columns: ['billing_option_id'])]
#[ORM\Entity(repositoryClass: NaturalPersonBillingOptionRepository::class)]
class NaturalPersonBillingOption
{
    use HasPersonOption;
    use HasBillingOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'natural_person_billing_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
