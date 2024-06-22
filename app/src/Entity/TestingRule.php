<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\TestingRuleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingRule
 */
#[ORM\Table(name: 'testing_rule')]
#[ORM\UniqueConstraint(name: 'testing_rule_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: TestingRuleRepository::class)]
class TestingRule extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'testing_rule_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
