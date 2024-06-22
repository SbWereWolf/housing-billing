<?php

namespace App\Entity;

use App\Entity\Column\HasAccount;
use App\Entity\Column\HasAddress;
use App\Entity\Column\HasCustomer;
use App\Entity\Column\HasDistributionPoint;
use App\Entity\Column\HasDistributor;
use App\Entity\Column\HasProduct;
use App\Repository\PersonalAccountShareRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * PersonalAccountShare
 */
#[ORM\Table(name: 'personal_account_share')]
#[ORM\UniqueConstraint(name: 'personal_account_share_product_point_customer_account_ux', columns: [
    'product_id',
    'distributor_id',
    'address_id',
    'distribution_point_id',
    'customer_id',
    'personal_account_id'
])]
#[ORM\UniqueConstraint(name: 'personal_account_share_product_address_account_id_ux', columns: [
    'product_id',
    'distributor_id',
    'address_id',
    'personal_account_id',
    'distribution_point_id'
])]
#[ORM\Entity(repositoryClass: PersonalAccountShareRepository::class)]
class PersonalAccountShare
{
    use HasAccount;
    use HasProduct;
    use HasDistributor;
    use HasDistributionPoint;
    use HasAddress;
    use HasCustomer;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'personal_account_share_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'share_dividend', type: 'integer', nullable: true, options: ['comment' => 'Делимое'])]
    private $shareDividend;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'share_divisor', type: 'integer', nullable: true, options: [
        'default' => '1',
        'comment' => 'Делитель'
    ])]
    private $shareDivisor = 1;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getShareDividend(): ?int
    {
        return $this->shareDividend;
    }

    public function setShareDividend(?int $shareDividend): static
    {
        $this->shareDividend = $shareDividend;

        return $this;
    }

    public function getShareDivisor(): ?int
    {
        return $this->shareDivisor;
    }

    public function setShareDivisor(?int $shareDivisor): static
    {
        $this->shareDivisor = $shareDivisor;

        return $this;
    }
}
