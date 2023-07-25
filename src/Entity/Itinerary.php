<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ItineraryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ItineraryRepository::class)]
#[ApiResource]
class Itinerary
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    #[ORM\JoinColumn(name: 'usser_id', referencedColumnName: 'id', nullable: true)]
    private ?User $usser = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $points = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsser(): ?User
    {
        return $this->usser;
    }

    public function setUsser(?User $usser): static
    {
        $this->usser = $usser;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPoints(): ?string
    {
        return $this->points;
    }

    /**
     * @param string|null $points
     */
    public function setPoints(?string $points): void
    {
        $this->points = $points;
    }



}
