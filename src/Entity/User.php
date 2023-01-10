<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['api_users_browse', 'api_users_read', 'api_user_game_answer_browse', 'api_user_game_answer_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private ?string $email = null;

    #[ORM\Column]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    #[Groups(['api_users_browse', 'api_users_read', 'api_user_game_answer_browse', 'api_user_game_answer_read'])]
    private ?string $pseudo = null;

    #[ORM\Column(nullable: true)]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private ?int $totalScore = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Gedmo\Timestampable(on: 'create')]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\ManyToMany(targetEntity: Game::class, inversedBy: 'users')]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private Collection $games;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: UserGameAnswer::class)]
    #[Groups(['api_users_browse', 'api_users_read'])]
    private Collection $userGameAnswers;

    public function __construct()
    {
        $this->games = new ArrayCollection();
        $this->userGameAnswers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getTotalScore(): ?int
    {
        return $this->totalScore;
    }

    public function setTotalScore(?int $totalScore): self
    {
        $this->totalScore = $totalScore;

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
     * @return Collection<int, Game>
     */
    public function getGames(): Collection
    {
        return $this->games;
    }

    public function addGame(Game $game): self
    {
        if (!$this->games->contains($game)) {
            $this->games->add($game);
        }

        return $this;
    }

    public function removeGame(Game $game): self
    {
        $this->games->removeElement($game);

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
            $userGameAnswer->setUser($this);
        }

        return $this;
    }

    public function removeUserGameAnswer(UserGameAnswer $userGameAnswer): self
    {
        if ($this->userGameAnswers->removeElement($userGameAnswer)) {
            // set the owning side to null (unless already changed)
            if ($userGameAnswer->getUser() === $this) {
                $userGameAnswer->setUser(null);
            }
        }

        return $this;
    }
}
