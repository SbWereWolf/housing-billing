<?php

namespace App\Entity;

use App\Entity\Column\HasAccount;
use App\Entity\Column\HasCustomer;
use App\Entity\Column\HasProduct;
use App\Repository\ProductPersonalAccountRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPersonalAccount
 */
#[ORM\Table(name: 'product_personal_account')]
#[ORM\UniqueConstraint(name: 'product_personal_account_product_customer_account_id_ux', columns: [
    'customer_id',
    'personal_account_id',
    'product_id'
])]
#[ORM\Entity(repositoryClass: ProductPersonalAccountRepository::class)]
class ProductPersonalAccount
{
    use HasProduct;
    use HasCustomer;
    use HasAccount;

    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'product_personal_account_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    public function getId(): ?string
    {
        return $this->id;
    }
}
