<?php

namespace App\Entity;

use App\Repository\OptionCelluleRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;


#[ORM\Entity(repositoryClass: OptionCelluleRepository::class)]
#[ApiResource]
class OptionCellule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $batterieAuxiliaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $batterieCellule = null;

    #[ORM\Column]
    private ?bool $chauffage = null;

    #[ORM\Column]
    private ?bool $chauffageGazoil = null;

    #[ORM\Column]
    private ?bool $chauffageAlde = null;

    #[ORM\Column]
    private ?bool $chauffeEau = null;

    #[ORM\Column]
    private ?bool $chauffageRoute = null;

    #[ORM\Column]
    private ?bool $eclairageLed = null;

    #[ORM\Column]
    private ?bool $fermeteurCentral = null;

    #[ORM\Column]
    private ?bool $marchepiedElectriq = null;

    #[ORM\Column]
    private ?bool $moustiquiairePorte = null;

    #[ORM\Column]
    private ?bool $porteCelluleBaie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $refrigCongelateur = null;

    #[ORM\Column]
    private ?int $reservoirEauPropre = null;

    #[ORM\Column(nullable: true)]
    private ?int $reservoirEauUse = null;

    #[ORM\Column]
    private ?bool $fourElectrique = null;

    #[ORM\Column]
    private ?bool $fourGaz = null;

    #[ORM\Column]
    private ?bool $toitDome = null;

    #[ORM\Column]
    private ?bool $skyDome = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $tissus = null;

    #[ORM\Column]
    private ?bool $doublePlancher = null;

    #[ORM\Column]
    private ?bool $hotteAspirante = null;

    #[ORM\Column]
    private ?bool $inverseurGaz = null;

    #[ORM\Column(nullable: true)]
    private ?int $panneauSolaire = null;

    #[ORM\Column]
    private ?bool $lampeAuvent = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isBatterieAuxiliaire(): ?bool
    {
        return $this->batterieAuxiliaire;
    }

    public function setBatterieAuxiliaire(bool $batterieAuxiliaire): self
    {
        $this->batterieAuxiliaire = $batterieAuxiliaire;

        return $this;
    }

    public function getBatterieCellule(): ?string
    {
        return $this->batterieCellule;
    }

    public function setBatterieCellule(?string $batterieCellule): self
    {
        $this->batterieCellule = $batterieCellule;

        return $this;
    }

    public function isChauffage(): ?bool
    {
        return $this->chauffage;
    }

    public function setChauffage(bool $chauffage): self
    {
        $this->chauffage = $chauffage;

        return $this;
    }

    public function isChauffageGazoil(): ?bool
    {
        return $this->chauffageGazoil;
    }

    public function setChauffageGazoil(bool $chauffageGazoil): self
    {
        $this->chauffageGazoil = $chauffageGazoil;

        return $this;
    }

    public function isChauffageAlde(): ?bool
    {
        return $this->chauffageAlde;
    }

    public function setChauffageAlde(bool $chauffageAlde): self
    {
        $this->chauffageAlde = $chauffageAlde;

        return $this;
    }

    public function isChauffeEau(): ?bool
    {
        return $this->chauffeEau;
    }

    public function setChauffeEau(bool $chauffeEau): self
    {
        $this->chauffeEau = $chauffeEau;

        return $this;
    }

    public function isChauffageRoute(): ?bool
    {
        return $this->chauffageRoute;
    }

    public function setChauffageRoute(bool $chauffageRoute): self
    {
        $this->chauffageRoute = $chauffageRoute;

        return $this;
    }

    public function isEclairageLed(): ?bool
    {
        return $this->eclairageLed;
    }

    public function setEclairageLed(bool $eclairageLed): self
    {
        $this->eclairageLed = $eclairageLed;

        return $this;
    }

    public function isFermeteurCentral(): ?bool
    {
        return $this->fermeteurCentral;
    }

    public function setFermeteurCentral(bool $fermeteurCentral): self
    {
        $this->fermeteurCentral = $fermeteurCentral;

        return $this;
    }

    public function isMarchepiedElectriq(): ?bool
    {
        return $this->marchepiedElectriq;
    }

    public function setMarchepiedElectriq(bool $marchepiedElectriq): self
    {
        $this->marchepiedElectriq = $marchepiedElectriq;

        return $this;
    }

    public function isMoustiquiairePorte(): ?bool
    {
        return $this->moustiquiairePorte;
    }

    public function setMoustiquiairePorte(bool $moustiquiairePorte): self
    {
        $this->moustiquiairePorte = $moustiquiairePorte;

        return $this;
    }

    public function isPorteCelluleBaie(): ?bool
    {
        return $this->porteCelluleBaie;
    }

    public function setPorteCelluleBaie(bool $porteCelluleBaie): self
    {
        $this->porteCelluleBaie = $porteCelluleBaie;

        return $this;
    }

    public function getRefrigCongelateur(): ?string
    {
        return $this->refrigCongelateur;
    }

    public function setRefrigCongelateur(?string $refrigCongelateur): self
    {
        $this->refrigCongelateur = $refrigCongelateur;

        return $this;
    }

    public function getReservoirEauPropre(): ?int
    {
        return $this->reservoirEauPropre;
    }

    public function setReservoirEauPropre(int $reservoirEauPropre): self
    {
        $this->reservoirEauPropre = $reservoirEauPropre;

        return $this;
    }

    public function getReservoirEauUse(): ?int
    {
        return $this->reservoirEauUse;
    }

    public function setReservoirEauUse(?int $reservoirEauUse): self
    {
        $this->reservoirEauUse = $reservoirEauUse;

        return $this;
    }

    public function isFourElectrique(): ?bool
    {
        return $this->fourElectrique;
    }

    public function setFourElectrique(bool $fourElectrique): self
    {
        $this->fourElectrique = $fourElectrique;

        return $this;
    }

    public function isFourGaz(): ?bool
    {
        return $this->fourGaz;
    }

    public function setFourGaz(bool $fourGaz): self
    {
        $this->fourGaz = $fourGaz;

        return $this;
    }

    public function isToitDome(): ?bool
    {
        return $this->toitDome;
    }

    public function setToitDome(bool $toitDome): self
    {
        $this->toitDome = $toitDome;

        return $this;
    }

    public function isSkyDome(): ?bool
    {
        return $this->skyDome;
    }

    public function setSkyDome(bool $skyDome): self
    {
        $this->skyDome = $skyDome;

        return $this;
    }

    public function getTissus(): ?string
    {
        return $this->tissus;
    }

    public function setTissus(?string $tissus): self
    {
        $this->tissus = $tissus;

        return $this;
    }

    public function isDoublePlancher(): ?bool
    {
        return $this->doublePlancher;
    }

    public function setDoublePlancher(bool $doublePlancher): self
    {
        $this->doublePlancher = $doublePlancher;

        return $this;
    }

    public function isHotteAspirante(): ?bool
    {
        return $this->hotteAspirante;
    }

    public function setHotteAspirante(bool $hotteAspirante): self
    {
        $this->hotteAspirante = $hotteAspirante;

        return $this;
    }

    public function isInverseurGaz(): ?bool
    {
        return $this->inverseurGaz;
    }

    public function setInverseurGaz(bool $inverseurGaz): self
    {
        $this->inverseurGaz = $inverseurGaz;

        return $this;
    }

    public function getPanneauSolaire(): ?int
    {
        return $this->panneauSolaire;
    }

    public function setPanneauSolaire(?int $panneauSolaire): self
    {
        $this->panneauSolaire = $panneauSolaire;

        return $this;
    }

    public function isLampeAuvent(): ?bool
    {
        return $this->lampeAuvent;
    }

    public function setLampeAuvent(bool $lampeAuvent): self
    {
        $this->lampeAuvent = $lampeAuvent;

        return $this;
    }
}
