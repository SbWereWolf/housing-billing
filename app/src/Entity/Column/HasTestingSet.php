<?php

namespace App\Entity\Column;

use App\Entity\RawReadings;
use App\Entity\TestingSet;
use Doctrine\ORM\Mapping as ORM;

trait HasTestingSet
{
    /**
     * @var TestingSet
     *
     * @ORM\ManyToOne(targetEntity="\App\Entity\TestingSet")
     * @ORM\JoinColumn(name="testing_set_id")
     */
    protected TestingSet $testingSet;

    public function getTestingSet(): TestingSet
    {
        return $this->testingSet;
    }

    public function setTestingSet(TestingSet $testingSet): static
    {
        $this->testingSet = $testingSet;

        return $this;
    }
}