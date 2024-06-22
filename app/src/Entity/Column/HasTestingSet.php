<?php

namespace App\Entity\Column;

use App\Entity\TestingSet;
use Doctrine\ORM\Mapping as ORM;

trait HasTestingSet
{
    /**
     * @var TestingSet
     */
    #[ORM\JoinColumn(name: 'testing_set_id')]
    #[ORM\ManyToOne(targetEntity: TestingSet::class)]
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