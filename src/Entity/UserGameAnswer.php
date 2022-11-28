<?php

namespace App\Entity;

use App\Repository\UserGameAnswerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserGameAnswerRepository::class)]
class UserGameAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $good = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $delayAnswer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isGood(): ?bool
    {
        return $this->good;
    }

    public function setGood(bool $good): self
    {
        $this->good = $good;

        return $this;
    }

    public function getDelayAnswer(): ?string
    {
        return $this->delayAnswer;
    }

    public function setDelayAnswer(string $delayAnswer): self
    {
        $this->delayAnswer = $delayAnswer;

        return $this;
    }
}
