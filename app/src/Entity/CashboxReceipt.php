<?php

namespace App\Entity;

use App\Repository\CashboxReceiptRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * CashboxReceipt
 */
#[ORM\Table(name: 'cashbox_receipt')]
#[ORM\Entity(repositoryClass: CashboxReceiptRepository::class)]
class CashboxReceipt
{
    /**
     * @var int
     */
    #[ORM\Column(name: 'id', type: 'bigint', nullable: false)]
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    #[ORM\SequenceGenerator(sequenceName: 'cashbox_receipt_id_seq', allocationSize: 1, initialValue: 1)]
    private $id;

    /**
     * @var int|null
     */
    #[ORM\Column(name: 'payment_id', type: 'bigint', nullable: true)]
    private $paymentId;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    public function setPaymentId(?string $paymentId): static
    {
        $this->paymentId = $paymentId;

        return $this;
    }


}
