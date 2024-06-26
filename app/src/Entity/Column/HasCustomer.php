<?php

namespace App\Entity\Column;

use App\Entity\Customer;
use Doctrine\ORM\Mapping as ORM;

trait HasCustomer
{
    /**
     * @var Customer
     */
    #[ORM\JoinColumn(name: 'customer_id')]
    #[ORM\ManyToOne(targetEntity: Customer::class)]
    protected Customer $customer;

    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    public function setCustomer(Customer $customer): static
    {
        $this->customer = $customer;

        return $this;
    }
}