<?php

namespace App\Entity;

use App\Repository\ResoffreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResoffreRepository::class)
 */
class Resoffre
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbr_de_place;

    /**
     * @ORM\Column(type="date")
     */
    private $date_res;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Offre::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Offre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrDePlace(): ?int
    {
        return $this->nbr_de_place;
    }

    public function setNbrDePlace(int $nbr_de_place): self
    {
        $this->nbr_de_place = $nbr_de_place;

        return $this;
    }

    public function getDateRes(): ?\DateTimeInterface
    {
        return $this->date_res;
    }

    public function setDateRes(\DateTimeInterface $date_res): self
    {
        $this->date_res = $date_res;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->Client;
    }

    public function setClient(?Client $Client): self
    {
        $this->Client = $Client;

        return $this;
    }

    public function getOffre(): ?Offre
    {
        return $this->Offre;
    }

    public function setOffre(?Offre $Offre): self
    {
        $this->Offre = $Offre;

        return $this;
    }
}
