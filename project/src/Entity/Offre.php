<?php

namespace App\Entity;

use App\Repository\OffreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OffreRepository::class)
 */
class Offre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $destination;

    /**
     * @ORM\ManyToOne(targetEntity=Vol::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $vol;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $hotel;

    /**
     * @ORM\ManyToOne(targetEntity=Guide::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Guide;

    /**
     * @ORM\Column(type="integer")
     */
    private $place_dispo;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="date")
     */
    private $valablede;

    /**
     * @ORM\Column(type="date")
     */
    private $valablea;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    

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

    public function getDestination(): ?string
    {
        return $this->destination;
    }

    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }


    public function getPlaceDispo(): ?int
    {
        return $this->place_dispo;
    }

    public function setPlaceDispo(int $place_dispo): self
    {
        $this->place_dispo = $place_dispo;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getValablede(): ?\DateTimeInterface
    {
        return $this->valablede;
    }

    public function setValablede(\DateTimeInterface $valablede): self
    {
        $this->valablede = $valablede;

        return $this;
    }

    public function getValablea(): ?\DateTimeInterface
    {
        return $this->valablea;
    }

    public function setValablea(\DateTimeInterface $valablea): self
    {
        $this->valablea = $valablea;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getVol(): ?Vol
    {
        return $this->vol;
    }

    public function setVol(?Vol $vol): self
    {
        $this->vol = $vol;

        return $this;
    }

    public function getHotel(): ?Hotel
    {
        return $this->hotel;
    }

    public function setHotel(?Hotel $hotel): self
    {
        $this->hotel = $hotel;

        return $this;
    }

    public function getGuide(): ?Guide
    {
        return $this->Guide;
    }

    public function setGuide(?Guide $Guide): self
    {
        $this->Guide = $Guide;

        return $this;
    }
}
