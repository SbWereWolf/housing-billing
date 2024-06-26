<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\ReadingsSenderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReadingsSender
 */
#[ORM\Table(name: 'readings_sender')]
#[ORM\UniqueConstraint(name: 'readings_sender_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: ReadingsSenderRepository::class)]
class ReadingsSender extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'readings_sender_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
