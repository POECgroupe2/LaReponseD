<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\QuestionAnswerRepository;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: QuestionAnswerRepository::class)]
class QuestionAnswer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['api_games_browse'])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['api_games_browse'])]
    private ?bool $isGood = null;

    #[ORM\ManyToOne(inversedBy: 'questionAnswers')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['api_games_browse'])]
    private ?Answer $answer = null;

    #[ORM\ManyToOne(inversedBy: 'questionAnswers')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Question $question = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsGood(): ?bool
    {
        return $this->isGood;
    }

    public function setIsGood(bool $isGood): self
    {
        $this->isGood = $isGood;

        return $this;
    }

    public function getAnswer(): ?Answer
    {
        return $this->answer;
    }

    public function setAnswer(?Answer $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

        return $this;
    }
}