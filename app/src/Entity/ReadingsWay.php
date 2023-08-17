<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * ReadingsWay
 *
 * @ORM\Table(name="readings_way", uniqueConstraints={@ORM\UniqueConstraint(name="readings_way_code_ux", columns={"code"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReadingsWayRepository")
 */
class ReadingsWay extends CaptionWithCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="readings_way_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
