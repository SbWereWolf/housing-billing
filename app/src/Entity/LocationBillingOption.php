<?php

namespace App\Entity;

use App\Entity\Column\HasBillingOption;
use App\Entity\Column\HasLocationOption;
use Doctrine\ORM\Mapping as ORM;

/**
 * LocationBillingOption
 *
 * @ORM\Table(name="location_billing_option", uniqueConstraints={@ORM\UniqueConstraint(name="location_billing_option_billing_option_id_location_option_id_ui", columns={"billing_option_id", "location_option_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\LocationBillingOptionRepository")
 */
class LocationBillingOption
{
    use HasLocationOption;
    use HasBillingOption;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="location_billing_option_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
