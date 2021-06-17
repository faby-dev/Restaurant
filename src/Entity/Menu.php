<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $Nom;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    /**
     * @ORM\Column(type="datetime")
     */
    private $CreatedAT;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }

    public function getCreatedAT(): ?\DateTimeInterface
    {
        return $this->CreatedAT;
    }

    public function setCreatedAT(\DateTimeInterface $CreatedAT): self
    {
        $this->CreatedAT = $CreatedAT;

        return $this;
    }
}
