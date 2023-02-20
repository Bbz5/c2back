<?php

namespace App\Entity;

use App\Repository\VehiculeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;

#[ORM\Entity(repositoryClass: VehiculeRepository::class)]
#[ApiResource]
class Vehicule
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'vehicules')]
    private ?Typologie $typologie = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix = null;

    #[ORM\ManyToMany(targetEntity: Status::class, inversedBy: 'vehicules')]
    private Collection $status;

    #[ORM\Column]
    private ?int $kilometrage = null;

    #[ORM\ManyToOne]
    private ?Boite $boite = null;

    #[ORM\Column(nullable: true)]
    private ?float $dimensionLongeur = null;

    #[ORM\Column(nullable: true)]
    private ?float $dimensionLargeur = null;

    #[ORM\Column(nullable: true)]
    private ?float $dimensionHauteur = null;

    #[ORM\ManyToMany(targetEntity: Region::class, inversedBy: 'vehicules')]
    private Collection $region;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Marque $marque = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $annee = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?NombreCouchage $nombreCouchage = null;

    #[ORM\ManyToMany(targetEntity: TypeCouchage::class, inversedBy: 'vehicules')]
    private Collection $typeCouchage;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Energie $energie = null;

    #[ORM\Column(length: 255)]
    private ?string $modele = null;

    #[ORM\Column(nullable: true)]
    private ?int $pvom = null;

    #[ORM\Column(nullable: true)]
    private ?int $ptac = null;

    #[ORM\Column(nullable: true)]
    private ?int $chargeUtile = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $garantie = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?OptionCellule $optionsCellule = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?OptionsPorteur $optionsPorteur = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?OptionsGenerals $optionsGenerals = null;

    public function __construct()
    {
        $this->status = new ArrayCollection();
        $this->region = new ArrayCollection();
        $this->typeCouchage = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypologie(): ?typologie
    {
        return $this->typologie;
    }

    public function setTypologie(?typologie $typologie): self
    {
        $this->typologie = $typologie;

        return $this;
    }


    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * @return Collection<int, Status>
     */
    public function getStatus(): Collection
    {
        return $this->status;
    }

    public function addStatus(Status $status): self
    {
        if (!$this->status->contains($status)) {
            $this->status->add($status);
        }

        return $this;
    }

    public function removeStatus(Status $status): self
    {
        $this->status->removeElement($status);

        return $this;
    }

    public function getKilometrage(): ?int
    {
        return $this->kilometrage;
    }

    public function setKilometrage(int $kilometrage): self
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    public function getBoite(): ?Boite
    {
        return $this->boite;
    }

    public function setBoite(?Boite $boite): self
    {
        $this->boite = $boite;

        return $this;
    }

    public function getDimensionLongeur(): ?float
    {
        return $this->dimensionLongeur;
    }

    public function setDimensionLongeur(?float $dimensionLongeur): self
    {
        $this->dimensionLongeur = $dimensionLongeur;

        return $this;
    }

    public function getDimensionLargeur(): ?float
    {
        return $this->dimensionLargeur;
    }

    public function setDimensionLargeur(?float $dimensionLargeur): self
    {
        $this->dimensionLargeur = $dimensionLargeur;

        return $this;
    }

    public function getDimensionHauteur(): ?float
    {
        return $this->dimensionHauteur;
    }

    public function setDimensionHauteur(?float $dimensionHauteur): self
    {
        $this->dimensionHauteur = $dimensionHauteur;

        return $this;
    }

    /**
     * @return Collection<int, region>
     */
    public function getRegion(): Collection
    {
        return $this->region;
    }

    public function addRegion(region $region): self
    {
        if (!$this->region->contains($region)) {
            $this->region->add($region);
        }

        return $this;
    }

    public function removeRegion(region $region): self
    {
        $this->region->removeElement($region);

        return $this;
    }

    public function getMarque(): ?marque
    {
        return $this->marque;
    }

    public function setMarque(?marque $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getAnnee(): ?\DateTimeInterface
    {
        return $this->annee;
    }

    public function setAnnee(\DateTimeInterface $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getNombreCouchage(): ?nombreCouchage
    {
        return $this->nombreCouchage;
    }

    public function setNombreCouchage(?nombreCouchage $nombreCouchage): self
    {
        $this->nombreCouchage = $nombreCouchage;

        return $this;
    }

    /**
     * @return Collection<int, typeCouchage>
     */
    public function getTypeCouchage(): Collection
    {
        return $this->typeCouchage;
    }

    public function addTypeCouchage(typeCouchage $typeCouchage): self
    {
        if (!$this->typeCouchage->contains($typeCouchage)) {
            $this->typeCouchage->add($typeCouchage);
        }

        return $this;
    }

    public function removeTypeCouchage(typeCouchage $typeCouchage): self
    {
        $this->typeCouchage->removeElement($typeCouchage);

        return $this;
    }

    public function getEnergie(): ?energie
    {
        return $this->energie;
    }

    public function setEnergie(?energie $energie): self
    {
        $this->energie = $energie;

        return $this;
    }

    public function getModele(): ?string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;

        return $this;
    }

    public function getPvom(): ?int
    {
        return $this->pvom;
    }

    public function setPvom(?int $pvom): self
    {
        $this->pvom = $pvom;

        return $this;
    }

    public function getPtac(): ?int
    {
        return $this->ptac;
    }

    public function setPtac(?int $ptac): self
    {
        $this->ptac = $ptac;

        return $this;
    }

    public function getChargeUtile(): ?int
    {
        return $this->chargeUtile;
    }

    public function setChargeUtile(?int $chargeUtile): self
    {
        $this->chargeUtile = $chargeUtile;

        return $this;
    }

    public function getGarantie(): ?int
    {
        return $this->garantie;
    }

    public function setGarantie(?int $garantie): self
    {
        $this->garantie = $garantie;

        return $this;
    }

    public function getOptionsCellule(): ?OptionCellule
    {
        return $this->optionsCellule;
    }

    public function setOptionsCellule(?OptionCellule $optionsCellule): self
    {
        $this->optionsCellule = $optionsCellule;

        return $this;
    }

    public function getOptionsPorteur(): ?OptionsPorteur
    {
        return $this->optionsPorteur;
    }

    public function setOptionsPorteur(?OptionsPorteur $optionsPorteur): self
    {
        $this->optionsPorteur = $optionsPorteur;

        return $this;
    }

    public function getOptionsGenerals(): ?optionsGenerals
    {
        return $this->optionsGenerals;
    }

    public function setOptionsGenerals(?optionsGenerals $optionsGenerals): self
    {
        $this->optionsGenerals = $optionsGenerals;

        return $this;
    }
}
