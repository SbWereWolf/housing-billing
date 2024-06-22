<?php

namespace App\Entity;

use App\Entity\Column\HasCustomer;
use App\Repository\NaturalPersonRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * NaturalPerson
 */
#[ORM\Table(name: 'natural_person')]
#[ORM\UniqueConstraint(name: 'natural_person_customer_id_ux', columns: ['customer_id'])]
#[ORM\Entity(repositoryClass: NaturalPersonRepository::class)]
class NaturalPerson
{
    use HasCustomer;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'natural_person_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
