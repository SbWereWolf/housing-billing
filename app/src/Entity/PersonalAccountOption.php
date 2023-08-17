<?php

namespace App\Entity;

use App\Entity\Primitive\CaptionWithCode;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccountOption
 *
 * @ORM\Table(name="personal_account_option")
 * @ORM\Entity(repositoryClass="App\Repository\PersonalAccountOptionRepository")
 */
class PersonalAccountOption extends CaptionWithCode
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="personal_account_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
