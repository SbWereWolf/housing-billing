<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use App\Repository\NaturalPersonOptionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * NaturalPersonOption
 */
#[ORM\Table(name: 'natural_person_option')]
#[ORM\Entity(repositoryClass: NaturalPersonOptionRepository::class)]
class NaturalPersonOption extends CaptionWithCode
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'natural_person_option_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
