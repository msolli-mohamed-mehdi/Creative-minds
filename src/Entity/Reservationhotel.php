<?php

namespace App\Entity;

use App\Repository\ReservationhotelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationhotelRepository::class)
 */
class Reservationhotel
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
    private $nombre_de_chambres;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Client;

    /**
     * @ORM\ManyToOne(targetEntity=Hotel::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Hotel;

    /**
     * @ORM\Column(type="date")
     */
    private $date_res;

    public function getId(): ?int
    {
        return $this->id;
    }


    
    public function getNombreDeChambres(): ?int
    {
        return $this->nombre_de_chambres;
    }

    public function setNombreDeChambres(int $nombre_de_chambres): self
    {
        $this->nombre_de_chambres = $nombre_de_chambres;

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

    public function getHotel(): ?Hotel
    {
        return $this->Hotel;
    }

    public function setHotel(?Hotel $Hotel): self
    {
        $this->Hotel = $Hotel;

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
}

