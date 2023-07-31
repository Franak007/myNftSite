<?php

namespace App\Entity;

use App\Repository\SubCategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubCategoryRepository::class)]
class SubCategory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $subCatLabel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubCatLabel(): ?string
    {
        return $this->subCatLabel;
    }

    public function setSubCatLabel(string $subCatLabel): static
    {
        $this->subCatLabel = $subCatLabel;

        return $this;
    }
}
