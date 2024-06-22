<?php

namespace App\Entity;

use App\Entity\Column\HasDeviceOption;
use App\Entity\Column\HasModel;
use App\Repository\NumberDeviceOptionMeteringDeviceModelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * NumberDeviceOptionMeteringDeviceModel
 */
#[ORM\Table(name: 'number_device_option_metering_device_model')]
#[ORM\Entity(repositoryClass: NumberDeviceOptionMeteringDeviceModelRepository::class)]
class NumberDeviceOptionMeteringDeviceModel
{
    use HasModel;
    use HasDeviceOption;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'number_device_option_metering_device_model_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var string|null
     */
    #[ORM\Column(name: 'number_value', type: 'decimal', precision: 18, scale: 6, nullable: true)]
    private $numberValue;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getNumberValue(): ?string
    {
        return $this->numberValue;
    }

    public function setNumberValue(?string $numberValue): static
    {
        $this->numberValue = $numberValue;

        return $this;
    }
}
