<?php

namespace App\Entity;

use App\Repository\OptionsGeneralsRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;


#[ORM\Entity(repositoryClass: OptionsGeneralsRepository::class)]
#[ApiResource]
class OptionsGenerals
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $airbagPassager = null;

    #[ORM\Column]
    private ?bool $regulateurVitesse = null;

    #[ORM\Column]
    private ?bool $InterieurCuir = null;

    #[ORM\Column]
    private ?bool $jantesAlu = null;

    #[ORM\Column]
    private ?bool $storeExterieur = null;

    #[ORM\Column]
    private ?bool $antenneSatellite = null;

    #[ORM\Column]
    private ?bool $attelage = null;

    #[ORM\Column]
    private ?bool $climatisationCellule = null;

    #[ORM\Column]
    private ?bool $television = null;

    #[ORM\Column]
    private ?bool $verinsStabilisation = null;

    #[ORM\Column(nullable: true)]
    private ?int $porteVelo = null;

    #[ORM\Column(length: 800, nullable: true)]
    private ?string $autreOptions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isAirbagPassager(): ?bool
    {
        return $this->airbagPassager;
    }

    public function setAirbagPassager(bool $airbagPassager): self
    {
        $this->airbagPassager = $airbagPassager;

        return $this;
    }

    public function isRegulateurVitesse(): ?bool
    {
        return $this->regulateurVitesse;
    }

    public function setRegulateurVitesse(bool $regulateurVitesse): self
    {
        $this->regulateurVitesse = $regulateurVitesse;

        return $this;
    }

    public function isInterieurCuir(): ?bool
    {
        return $this->InterieurCuir;
    }

    public function setInterieurCuir(bool $InterieurCuir): self
    {
        $this->InterieurCuir = $InterieurCuir;

        return $this;
    }

    public function isJantesAlu(): ?bool
    {
        return $this->jantesAlu;
    }

    public function setJantesAlu(bool $jantesAlu): self
    {
        $this->jantesAlu = $jantesAlu;

        return $this;
    }

    public function isStoreExterieur(): ?bool
    {
        return $this->storeExterieur;
    }

    public function setStoreExterieur(bool $storeExterieur): self
    {
        $this->storeExterieur = $storeExterieur;

        return $this;
    }

    public function isAntenneSatellite(): ?bool
    {
        return $this->antenneSatellite;
    }

    public function setAntenneSatellite(bool $antenneSatellite): self
    {
        $this->antenneSatellite = $antenneSatellite;

        return $this;
    }

    public function isAttelage(): ?bool
    {
        return $this->attelage;
    }

    public function setAttelage(bool $attelage): self
    {
        $this->attelage = $attelage;

        return $this;
    }

    public function isClimatisationCellule(): ?bool
    {
        return $this->climatisationCellule;
    }

    public function setClimatisationCellule(bool $climatisationCellule): self
    {
        $this->climatisationCellule = $climatisationCellule;

        return $this;
    }

    public function isTelevision(): ?bool
    {
        return $this->television;
    }

    public function setTelevision(bool $television): self
    {
        $this->television = $television;

        return $this;
    }

    public function isVerinsStabilisation(): ?bool
    {
        return $this->verinsStabilisation;
    }

    public function setVerinsStabilisation(bool $verinsStabilisation): self
    {
        $this->verinsStabilisation = $verinsStabilisation;

        return $this;
    }

    public function getPorteVelo(): ?int
    {
        return $this->porteVelo;
    }

    public function setPorteVelo(?int $porteVelo): self
    {
        $this->porteVelo = $porteVelo;

        return $this;
    }

    public function getAutreOptions(): ?string
    {
        return $this->autreOptions;
    }

    public function setAutreOptions(?string $autreOptions): self
    {
        $this->autreOptions = $autreOptions;

        return $this;
    }
}
