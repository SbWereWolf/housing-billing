<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * DeviceOption
 *
 * @ORM\Table(name="device_option", uniqueConstraints={@ORM\UniqueConstraint(name="device_option_code_ux", columns={"code"})})
 * @ORM\Entity(repositoryClass="App\Repository\DeviceOptionRepository")
 */
class DeviceOption extends CaptionWithCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="device_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
