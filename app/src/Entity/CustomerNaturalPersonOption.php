<?php

namespace App\Entity;

use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasCustomer;
use App\Entity\Column\HasPersonOption;
use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerNaturalPersonOption
 */
#[ORM\Table(name: 'customer_natural_person_option')]
#[ORM\Entity(repositoryClass: \App\Repository\CustomerNaturalPersonOptionRepository::class)]
class CustomerNaturalPersonOption
{
    use HasCustomer;
    use HasPersonOption;
    use HasBillingOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'customer_natural_person_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
