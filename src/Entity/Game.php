<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\GameRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: GameRepository::class)]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['api_users_browse', 'api_user_game_answer_browse', 'api_user_game_answer_read', 'api_games_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(['api_users_browse', 'api_users_read', 'api_user_game_answer_browse', 'api_user_game_answer_read', 'api_games_read'])]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Gedmo\Timestampable(on: 'create')]
    #[Groups(['api_games_read'])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToMany(targetEntity: Question::class, mappedBy: 'games')]
    #[Groups(['api_users_browse', 'api_users_read', 'api_games_read'])]
    private Collection $questions;

    #[ORM\OneToMany(mappedBy: 'game', targetEntity: UserGameAnswer::class)]
    private Collection $userGameAnswers;

    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'games')]
    private Collection $users;

    public function __construct()
    {
        $this->questions = new ArrayCollection();
        $this->userGameAnswers = new ArrayCollection();
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return Collection<int, Question>
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions->add($question);
            $question->addGame($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            $question->removeGame($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, UserGameAnswer>
     */
    public function getUserGameAnswers(): Collection
    {
        return $this->userGameAnswers;
    }

    public function addUserGameAnswer(UserGameAnswer $userGameAnswer): self
    {
        if (!$this->userGameAnswers->contains($userGameAnswer)) {
            $this->userGameAnswers->add($userGameAnswer);
            $userGameAnswer->setGame($this);
        }

        return $this;
    }

    public function removeUserGameAnswer(UserGameAnswer $userGameAnswer): self
    {
        if ($this->userGameAnswers->removeElement($userGameAnswer)) {
            // set the owning side to null (unless already changed)
            if ($userGameAnswer->getGame() === $this) {
                $userGameAnswer->setGame(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->addGame($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeGame($this);
        }

        return $this;
    }
}