<?php

namespace App\Entity\Column;

use App\Entity\ReadingsSender;
use Doctrine\ORM\Mapping as ORM;

trait HasSender
{
    /**
     * @var ReadingsSender
     */
    #[ORM\JoinColumn(name: 'readings_sender_id')]
    #[ORM\ManyToOne(targetEntity: ReadingsSender::class)]
    protected ReadingsSender $sender;

    public function getSender(): ReadingsSender
    {
        return $this->sender;
    }

    public function setSender(
        ReadingsSender $sender
    ): static {
        $this->sender = $sender;

        return $this;
    }
}