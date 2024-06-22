<?php

namespace App\Entity;

use App\Entity\Column\HasTestingRule;
use App\Entity\Column\HasTestingSet;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingRuleSet
 */
#[ORM\Table(name: 'testing_rule_set')]
#[ORM\UniqueConstraint(name: 'testing_set_testing_rule_testing_set_id_testing_rule_id_ux', columns: ['testing_set_id', 'testing_rule_id'])]
#[ORM\Entity(repositoryClass: \App\Repository\TestingRuleSetRepository::class)]
class TestingRuleSet
{
    use HasTestingSet;
    use HasTestingRule;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'testing_rule_set_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
