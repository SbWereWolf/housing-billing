<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * DoctrineMigrationVersions
 */
#[ORM\Table(name: 'doctrine_migration_versions')]
#[ORM\Entity]
class DoctrineMigrationVersions
{
    /**
     * @var string
     */
    #[ORM\Column(name: 'version', type: 'string', length: 191, nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'doctrine_migration_versions_version_seq', allocationSize: 1, initialValue: 1)]
    private $version;

    /**
     * @var DateTime|null
     */
    #[ORM\Column(name: 'executed_at', type: 'datetime', nullable: true)]
    private $executedAt;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'execution_time', type: 'integer', nullable: true)]
    private $executionTime;

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function getExecutedAt(): ?DateTimeInterface
    {
        return $this->executedAt;
    }

    public function setExecutedAt(?DateTimeInterface $executedAt): static
    {
        $this->executedAt = $executedAt;

        return $this;
    }

    public function getExecutionTime(): ?int
    {
        return $this->executionTime;
    }

    public function setExecutionTime(?int $executionTime): static
    {
        $this->executionTime = $executionTime;

        return $this;
    }


}
