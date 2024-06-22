<?php

namespace App\Entity;

use App\Entity\Column\HasSender;
use App\Entity\Column\HasWay;
use App\Repository\ReadingsSenderReadingsWayRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReadingsSenderReadingsWay
 */
#[ORM\Table(name: 'readings_sender_readings_way')]
#[ORM\UniqueConstraint(name: 'readings_sender_readings_way_readings_sender_id_readings_way_id', columns: [
    'readings_sender_id',
    'readings_way_id'
])]
#[ORM\Entity(repositoryClass: ReadingsSenderReadingsWayRepository::class)]
class ReadingsSenderReadingsWay
{
    use HasSender;
    use HasWay;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'readings_sender_readings_way_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
