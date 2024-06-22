<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\LocationOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * LocationOption
 */
#[ORM\Table(name: 'location_option')]
#[ORM\UniqueConstraint(name: 'address_option_code_ux', columns: ['code'])]
#[ORM\Entity(repositoryClass: LocationOptionRepository::class)]
class LocationOption
    extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'location_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
