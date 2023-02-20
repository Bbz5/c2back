<?php

namespace App\Entity;

use App\Repository\EnergieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: EnergieRepository::class)]
#[ApiResource()]
class Energie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $typeEnergie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeEnergie(): ?string
    {
        return $this->typeEnergie;
    }

    public function setTypeEnergie(string $typeEnergie): self
    {
        $this->typeEnergie = $typeEnergie;

        return $this;
    }
}
