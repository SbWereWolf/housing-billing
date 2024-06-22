<?php

namespace App\Entity\Column;

use App\Entity\BillingOption;
use Doctrine\ORM\Mapping as ORM;

trait HasBillingOption
{
    /**
     * @var BillingOption
     */
    #[ORM\JoinColumn(name: 'billing_option_id')]
    #[ORM\ManyToOne(targetEntity: \App\Entity\BillingOption::class)]
    protected BillingOption $billingOption;

    public function getBillingOption(): BillingOption
    {
        return $this->billingOption;
    }

    public function setBillingOption(
        BillingOption $billingOption
    ): static {
        $this->billingOption = $billingOption;

        return $this;
    }
}