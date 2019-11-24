<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MissingRepository")
 */
class Missing
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateDisparition;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateRetrouver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dernierEndroitVue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $endroitRetrouver;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomComplet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateDisparition(): ?\DateTimeInterface
    {
        return $this->dateDisparition;
    }

    public function setDateDisparition(\DateTimeInterface $dateDisparition): self
    {
        $this->dateDisparition = $dateDisparition;

        return $this;
    }

    public function getDateRetrouver(): ?\DateTimeInterface
    {
        return $this->dateRetrouver;
    }

    public function setDateRetrouver(?\DateTimeInterface $dateRetrouver): self
    {
        $this->dateRetrouver = $dateRetrouver;

        return $this;
    }

    public function getDernierEndroitVue(): ?string
    {
        return $this->dernierEndroitVue;
    }

    public function setDernierEndroitVue(?string $dernierEndroitVue): self
    {
        $this->dernierEndroitVue = $dernierEndroitVue;

        return $this;
    }

    public function getEndroitRetrouver(): ?string
    {
        return $this->endroitRetrouver;
    }

    public function setEndroitRetrouver(?string $endroitRetrouver): self
    {
        $this->endroitRetrouver = $endroitRetrouver;

        return $this;
    }

    public function getNomComplet(): ?string
    {
        return $this->nomComplet;
    }

    public function setNomComplet(string $nomComplet): self
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }
}
