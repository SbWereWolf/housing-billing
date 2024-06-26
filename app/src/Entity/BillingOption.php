<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\BillingOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * BillingOption
 */
#[ORM\Table(name: 'billing_option')]
#[ORM\UniqueConstraint(name: 'billing_option_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: BillingOptionRepository::class)]
class BillingOption extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'billing_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
