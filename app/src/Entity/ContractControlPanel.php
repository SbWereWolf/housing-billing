<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ContractControlPanel
 */
#[ORM\Table(name: 'contract_control_panel')]
#[ORM\Entity(repositoryClass: \App\Repository\ContractControlPanelRepository::class)]
class ContractControlPanel
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'contract_control_panel_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'contract_id', type: 'bigint', nullable: true)]
    private $contractId;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'control_panel_id', type: 'bigint', nullable: true)]
    private $controlPanelId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    public function setContractId(?string $contractId): static
    {
        $this->contractId = $contractId;

        return $this;
    }

    public function getControlPanelId(): ?string
    {
        return $this->controlPanelId;
    }

    public function setControlPanelId(?string $controlPanelId): static
    {
        $this->controlPanelId = $controlPanelId;

        return $this;
    }


}
