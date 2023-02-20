<?php

namespace App\Entity;

use App\Repository\OptionsPorteurRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Metadata\ApiResource;


#[ORM\Entity(repositoryClass: OptionsPorteurRepository::class)]
#[ApiResource]
class OptionsPorteur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    private ?MarquePorteur $marquePorteur = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $modelePorteur = null;

    #[ORM\Column(nullable: true)]
    private ?float $cylindree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $motorisation = null;

    #[ORM\Column(nullable: true)]
    private ?float $puissanceDin = null;

    #[ORM\Column(nullable: true)]
    private ?float $puissanceFiscale = null;

    #[ORM\Column]
    private ?bool $abs = null;

    #[ORM\Column]
    private ?bool $airbag = null;

    #[ORM\Column]
    private ?bool $autoradio = null;

    #[ORM\Column]
    private ?bool $ClimaPorteur = null;

    #[ORM\Column]
    private ?bool $retroviseurElect = null;

    #[ORM\Column]
    private ?bool $siegeCabConfort = null;

    #[ORM\Column]
    private ?bool $vitresElectr = null;

    #[ORM\Column]
    private ?bool $verrouillage = null;

    #[ORM\Column]
    private ?bool $antiBrouillard = null;

    #[ORM\Column]
    private ?bool $cameraRecoule = null;

    #[ORM\Column]
    private ?bool $esp = null;

    #[ORM\Column]
    private ?bool $retroviseurElectr = null;

    #[ORM\Column]
    private ?bool $stopStart = null;

    #[ORM\Column]
    private ?bool $euro6 = null;

    #[ORM\Column]
    private ?bool $feuxLed = null;

    #[ORM\Column]
    private ?bool $rideauIso = null;

    #[ORM\Column]
    private ?bool $gps = null;

    #[ORM\Column]
    private ?bool $asr = null;

    #[ORM\Column]
    private ?bool $antiDemarrage = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarquePorteur(): ?marquePOrteur
    {
        return $this->marquePorteur;
    }

    public function setMarquePorteur(?marquePOrteur $marquePorteur): self
    {
        $this->marquePorteur = $marquePorteur;

        return $this;
    }

    public function getModelePorteur(): ?string
    {
        return $this->modelePorteur;
    }

    public function setModelePorteur(?string $modelePorteur): self
    {
        $this->modelePorteur = $modelePorteur;

        return $this;
    }

    public function getCylindree(): ?float
    {
        return $this->cylindree;
    }

    public function setCylindree(?float $cylindree): self
    {
        $this->cylindree = $cylindree;

        return $this;
    }

    public function getMotorisation(): ?string
    {
        return $this->motorisation;
    }

    public function setMotorisation(?string $motorisation): self
    {
        $this->motorisation = $motorisation;

        return $this;
    }

    public function getPuissanceDin(): ?float
    {
        return $this->puissanceDin;
    }

    public function setPuissanceDin(?float $puissanceDin): self
    {
        $this->puissanceDin = $puissanceDin;

        return $this;
    }

    public function getPuissanceFiscale(): ?float
    {
        return $this->puissanceFiscale;
    }

    public function setPuissanceFiscale(?float $puissanceFiscale): self
    {
        $this->puissanceFiscale = $puissanceFiscale;

        return $this;
    }

    public function isAbs(): ?bool
    {
        return $this->abs;
    }

    public function setAbs(bool $abs): self
    {
        $this->abs = $abs;

        return $this;
    }

    public function isAirbag(): ?bool
    {
        return $this->airbag;
    }

    public function setAirbag(bool $airbag): self
    {
        $this->airbag = $airbag;

        return $this;
    }

    public function isAutoradio(): ?bool
    {
        return $this->autoradio;
    }

    public function setAutoradio(bool $autoradio): self
    {
        $this->autoradio = $autoradio;

        return $this;
    }

    public function isClimaPorteur(): ?bool
    {
        return $this->ClimaPorteur;
    }

    public function setClimaPorteur(bool $ClimaPorteur): self
    {
        $this->ClimaPorteur = $ClimaPorteur;

        return $this;
    }

    public function isRetroviseurElect(): ?bool
    {
        return $this->retroviseurElect;
    }

    public function setRetroviseurElect(bool $retroviseurElect): self
    {
        $this->retroviseurElect = $retroviseurElect;

        return $this;
    }

    public function isSiegeCabConfort(): ?bool
    {
        return $this->siegeCabConfort;
    }

    public function setSiegeCabConfort(bool $siegeCabConfort): self
    {
        $this->siegeCabConfort = $siegeCabConfort;

        return $this;
    }

    public function isVitresElectr(): ?bool
    {
        return $this->vitresElectr;
    }

    public function setVitresElectr(bool $vitresElectr): self
    {
        $this->vitresElectr = $vitresElectr;

        return $this;
    }

    public function isVerrouillage(): ?bool
    {
        return $this->verrouillage;
    }

    public function setVerrouillage(bool $verrouillage): self
    {
        $this->verrouillage = $verrouillage;

        return $this;
    }

    public function isAntiBrouillard(): ?bool
    {
        return $this->antiBrouillard;
    }

    public function setAntiBrouillard(bool $antiBrouillard): self
    {
        $this->antiBrouillard = $antiBrouillard;

        return $this;
    }

    public function isCameraRecoule(): ?bool
    {
        return $this->cameraRecoule;
    }

    public function setCameraRecoule(bool $cameraRecoule): self
    {
        $this->cameraRecoule = $cameraRecoule;

        return $this;
    }

    public function isEsp(): ?bool
    {
        return $this->esp;
    }

    public function setEsp(bool $esp): self
    {
        $this->esp = $esp;

        return $this;
    }

    public function isRetroviseurElectr(): ?bool
    {
        return $this->retroviseurElectr;
    }

    public function setRetroviseurElectr(bool $retroviseurElectr): self
    {
        $this->retroviseurElectr = $retroviseurElectr;

        return $this;
    }

    public function isStopStart(): ?bool
    {
        return $this->stopStart;
    }

    public function setStopStart(bool $stopStart): self
    {
        $this->stopStart = $stopStart;

        return $this;
    }

    public function isEuro6(): ?bool
    {
        return $this->euro6;
    }

    public function setEuro6(bool $euro6): self
    {
        $this->euro6 = $euro6;

        return $this;
    }

    public function isFeuxLed(): ?bool
    {
        return $this->feuxLed;
    }

    public function setFeuxLed(bool $feuxLed): self
    {
        $this->feuxLed = $feuxLed;

        return $this;
    }

    public function isRideauIso(): ?bool
    {
        return $this->rideauIso;
    }

    public function setRideauIso(bool $rideauIso): self
    {
        $this->rideauIso = $rideauIso;

        return $this;
    }

    public function isGps(): ?bool
    {
        return $this->gps;
    }

    public function setGps(bool $gps): self
    {
        $this->gps = $gps;

        return $this;
    }

    public function isAsr(): ?bool
    {
        return $this->asr;
    }

    public function setAsr(bool $asr): self
    {
        $this->asr = $asr;

        return $this;
    }

    public function isAntiDemarrage(): ?bool
    {
        return $this->antiDemarrage;
    }

    public function setAntiDemarrage(bool $antiDemarrage): self
    {
        $this->antiDemarrage = $antiDemarrage;

        return $this;
    }
}
