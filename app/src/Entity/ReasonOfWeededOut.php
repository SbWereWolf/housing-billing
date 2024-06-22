<?php

namespace App\Entity;

use App\Entity\Column\HasTestingRule;
use App\Entity\Column\HasTestingRun;
use App\Entity\Column\HasTestingSet;
use App\Repository\ReasonOfWeededOutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReasonOfWeededOut
 */
#[ORM\Table(name: 'reason_of_weeded_out')]
#[ORM\UniqueConstraint(name: 'reason_for_weed_out_testing_run_id_testing_set_id_rule_id_ux', columns: [
    'testing_run_id',
    'testing_set_id',
    'testing_rule_id'
])]
#[ORM\Entity(repositoryClass: ReasonOfWeededOutRepository::class)]
class ReasonOfWeededOut
{
    use HasTestingRun;
    use HasTestingSet;
    use HasTestingRule;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'reason_of_weeded_out_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
