<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UserRepository;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ApiResource]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    

    private ?bool $isVerified;

    #[ORM\Column(type:'string',length: 255, nullable: true)]

    private $resetToken;
    #[ORM\Column(type:'datetime', nullable: true)]

    private $resetTokenExpiresAt;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];
    #[ORM\Column(type:'string',length: 255,nullable:true)]
    private string $lastname;
    #[ORM\Column(length: 255,nullable:true)]
    private string $firstname;

    #[ORM\Column]
    private ?string $password = null;
    #[ORM\Column(type:'datetime',nullable:true)]

    private \DateTime $dateOfBirth ;
    #[ORM\Column(length: 255,nullable:true)]
    private string $genre ;

    #[ORM\OneToMany(mappedBy: 'usser', targetEntity: Itinerary::class)]
    private Collection $itineraries;

    public function __construct()
    {
        $this->itineraries = new ArrayCollection();
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
    public function getLastname(): string
    {
        return $this->lastname;
    }
    public function setLastname(string $lastname): User
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }


    public function setDateOfBirth(DateTime $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }


    public function setFirstname(string $firstname):  self
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre(string $genre): self
    {
        $this->genre = $genre;
        return $this;
    }
    /**
     * @return bool|null
     */
    public function getIsVerified(): ?bool
    {
        return $this->isVerified;
    }

    /**
     * @param bool|null $isVerified
     */
    public function setIsVerified(?bool $isVerified): self
    {
        $this->isVerified = $isVerified;
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

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function getResetToken(): string
    {
        return $this->resetToken;
    }


    public function setResetToken($resetToken): self
    {
        $this->resetToken = $resetToken;
        return $this;
    }


    public function getResetTokenExpiresAt(): ?\DateTimeInterface
    {
        return $this->resetTokenExpiresAt;
    }

    public function setResetTokenExpiresAt(?\DateTimeInterface $resetTokenExpiresAt):self
    {
        $this->resetTokenExpiresAt = $resetTokenExpiresAt;
        return $this;
    }

    /**
     * @return Collection<int, Itinerary>
     */
    public function getUsers(): Collection
    {
        return $this->itineraries;
    }

    public function addUser(Itinerary $user): static
    {
        if (!$this->itineraries->contains($user)) {
            $this->itineraries->add($user);
            $user->setUsser($this);
        }

        return $this;
    }

    public function removeUser(Itinerary $user): static
    {
        if ($this->itineraries->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getUsser() === $this) {
                $user->setUsser(null);
            }
        }

        return $this;
    }
}
