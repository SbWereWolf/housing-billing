<?php

namespace App\Entity\Column;

use App\Entity\Address;
use App\Entity\Distributor;
use Doctrine\ORM\Mapping as ORM;

trait HasDistributor
{
    /**
     * @var Distributor
     */
    #[ORM\JoinColumn(name: 'distributor_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\Distributor::class)]
    protected Distributor $distributor;

    public function getDistributor(): Distributor
    {
        return $this->distributor;
    }

    public function setDistributor(Distributor $distributor): static
    {
        $this->distributor = $distributor;

        return $this;
    }
}