<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\ReadingsPurposeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReadingsPurpose
 */
#[ORM\Table(name: 'readings_purpose')]
#[ORM\UniqueConstraint(name: 'readings_purpose_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: ReadingsPurposeRepository::class)]
class ReadingsPurpose extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'readings_purpose_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }


}
