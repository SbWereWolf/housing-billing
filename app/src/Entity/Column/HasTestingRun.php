<?php

namespace App\Entity\Column;

use App\Entity\RawReadings;
use App\Entity\TestingRun;
use Doctrine\ORM\Mapping as ORM;

trait HasTestingRun
{
    /**
     * @var TestingRun
     */
    #[ORM\JoinColumn(name: 'testing_run_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\TestingRun::class)]
    protected TestingRun $testingRun;

    public function getTestingRun(): TestingRun
    {
        return $this->testingRun;
    }

    public function setTestingRun(TestingRun $testingRun): static
    {
        $this->testingRun = $testingRun;

        return $this;
    }
}