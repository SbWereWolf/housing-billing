<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ConversionRatio
 *
 * @ORM\Table(name="conversion_ratio")
 * @ORM\Entity(repositoryClass="App\Repository\ConversionRatioRepository")
 */
class ConversionRatio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="conversion_ratio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var UnitsOfMeasure
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\UnitsOfMeasure")
     * @ORM\JoinColumn(name="source_units_of_measure_id")
     */
    private UnitsOfMeasure $source;

    /**
     * @var UnitsOfMeasure
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\UnitsOfMeasure")
     * @ORM\JoinColumn(name="target_units_of_measure_id")
     */
    private UnitsOfMeasure $target;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getSource(): UnitsOfMeasure
    {
        return $this->source;
    }

    public function setSource(UnitsOfMeasure $source): static
    {
        $this->source = $source;

        return $this;
    }

    public function getTarget(): UnitsOfMeasure
    {
        return $this->target;
    }

    public function setTarget(UnitsOfMeasure $target): static
    {
        $this->target = $target;

        return $this;
    }


}
