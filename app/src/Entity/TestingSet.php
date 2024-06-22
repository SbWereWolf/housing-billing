<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\TestingSetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * TestingSet
 */
#[ORM\Table(name: 'testing_set')]
#[ORM\UniqueConstraint(name: 'testing_set_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: TestingSetRepository::class)]
class TestingSet extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'testing_set_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
