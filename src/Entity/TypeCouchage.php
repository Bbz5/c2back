<?php

namespace App\Entity;

use App\Repository\TypeCouchageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: TypeCouchageRepository::class)]
#[ApiResource()]
class TypeCouchage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $type = null;

    #[ORM\ManyToMany(targetEntity: Vehicule::class, mappedBy: 'typeCouchage')]
    private Collection $vehicules;

    public function __construct()
    {
        $this->vehicules = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Vehicule>
     */
    public function getVehicules(): Collection
    {
        return $this->vehicules;
    }

    public function addVehicule(Vehicule $vehicule): self
    {
        if (!$this->vehicules->contains($vehicules)) {
            $this->vehicules->add($vehicules);
            $vehicules->addTypeCouchage($this);
        }

        return $this;
    }

    public function removeVehicule(Vehicule $vehicules): self
    {
        if ($this->vehicules->removeElement($vehicules)) {
            $vehicules->removeTypeCouchage($this);
        }

        return $this;
    }
}
