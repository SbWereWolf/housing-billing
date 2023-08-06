<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReadingsSenderReadingsWay
 *
 * @ORM\Table(name="readings_sender_readings_way", uniqueConstraints={@ORM\UniqueConstraint(name="readings_sender_readings_way_readings_sender_id_readings_way_id", columns={"readings_sender_id", "readings_way_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReadingsSenderReadingsWayRepository")
 */
class ReadingsSenderReadingsWay
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="readings_sender_readings_way_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_sender_id", type="bigint", nullable=true)
     */
    private $readingsSenderId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="readings_way_id", type="bigint", nullable=true)
     */
    private $readingsWayId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getReadingsSenderId(): ?string
    {
        return $this->readingsSenderId;
    }

    public function setReadingsSenderId(?string $readingsSenderId): static
    {
        $this->readingsSenderId = $readingsSenderId;

        return $this;
    }

    public function getReadingsWayId(): ?string
    {
        return $this->readingsWayId;
    }

    public function setReadingsWayId(?string $readingsWayId): static
    {
        $this->readingsWayId = $readingsWayId;

        return $this;
    }


}
