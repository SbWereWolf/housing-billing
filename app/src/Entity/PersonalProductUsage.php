<?php

namespace App\Entity;

use App\Entity\Column\HasAccount;
use App\Entity\Column\HasAddress;
use App\Entity\Column\HasBillingPeriod;
use App\Entity\Column\HasCustomer;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Entity\Column\HasUnitsOfMeasure;
use App\Repository\PersonalProductUsageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalProductUsage
 */
#[ORM\Table(name: 'personal_product_usage')]
#[ORM\UniqueConstraint(name: 'personal_product_usage_product_address_customer_account_ux', columns: [
    'product_id',
    'distributor_id',
    'address_id',
    'distribution_point_id',
    'customer_id',
    'personal_account_id',
    'year',
    'month'
])]
#[ORM\UniqueConstraint(name: 'personal_product_usage_product_address_account_year_month_ux', columns: [
    'product_id',
    'distributor_id',
    'address_id',
    'personal_account_id',
    'distribution_point_id',
    'year',
    'month'
])]
#[ORM\Entity(repositoryClass: PersonalProductUsageRepository::class)]
class PersonalProductUsage
{
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasBillingPeriod;
    use HasAccount;
    use HasUnitsOfMeasure;
    use HasAddress;
    use HasCustomer;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'personal_product_usage_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'volume', type: 'bigint', nullable: true)]
    private $volume;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

        return $this;
    }
}
