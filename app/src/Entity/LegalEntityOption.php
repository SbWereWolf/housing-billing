<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\LegalEntityOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * LegalEntityOption
 */
#[ORM\Table(name: 'legal_entity_option')]
#[ORM\Entity(repositoryClass: LegalEntityOptionRepository::class)]
class LegalEntityOption extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'legal_entity_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
