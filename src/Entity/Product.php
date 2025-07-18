<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomProduit = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $descriptionProduit = null;

    #[ORM\Column]
    private ?int $prixProduit = null;

    #[ORM\Column(length: 255)]
    private ?string $categorieProduit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): static
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getDescriptionProduit(): ?string
    {
        return $this->descriptionProduit;
    }

    public function setDescriptionProduit(?string $descriptionProduit): static
    {
        $this->descriptionProduit = $descriptionProduit;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->prixProduit;
    }

    public function setPrixProduit(int $prixProduit): static
    {
        $this->prixProduit = $prixProduit;

        return $this;
    }

    public function getCategorieProduit(): ?string
    {
        return $this->categorieProduit;
    }

    public function setCategorieProduit(string $categorieProduit): static
    {
        $this->categorieProduit = $categorieProduit;

        return $this;
    }
}
