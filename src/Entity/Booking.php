<?php

namespace App\Entity;

use App\Repository\BookingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BookingRepository::class)]
class Booking
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $arrival = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $departure = null;

    #[ORM\Column]
    private ?int $number_of_person = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    private ?User $farmer = null;

    #[ORM\ManyToOne(inversedBy: 'bookings')]
    private ?Offer $offer = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArrival(): ?\DateTimeInterface
    {
        return $this->arrival;
    }

    public function setArrival(\DateTimeInterface $arrival): self
    {
        $this->arrival = $arrival;

        return $this;
    }

    public function getDeparture(): ?\DateTimeInterface
    {
        return $this->departure;
    }

    public function setDeparture(\DateTimeInterface $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    public function getNumberOfPerson(): ?int
    {
        return $this->number_of_person;
    }

    public function setNumberOfPerson(int $number_of_person): self
    {
        $this->number_of_person = $number_of_person;

        return $this;
    }

    public function getFarmer(): ?User
    {
        return $this->farmer;
    }

    public function setFarmer(?User $farmer): self
    {
        $this->farmer = $farmer;

        return $this;
    }

    public function getOffer(): ?Offer
    {
        return $this->offer;
    }

    public function setOffer(?Offer $offer): self
    {
        $this->offer = $offer;

        return $this;
    }
}
