<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CurriculumVitaeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CurriculumVitaeRepository::class)]
#[ApiResource]
class CurriculumVitae
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $informationsPersonnelles = null;

    #[ORM\Column(length: 255)]
    private ?string $experienceProfesionnelle = null;

    #[ORM\Column(length: 255)]
    private ?string $Formations = null;

    #[ORM\Column(length: 255)]
    private ?string $Competences = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInformationsPersonnelles(): ?string
    {
        return $this->informationsPersonnelles;
    }

    public function setInformationsPersonnelles(string $informationsPersonnelles): self
    {
        $this->informationsPersonnelles = $informationsPersonnelles;

        return $this;
    }

    public function getExperienceProfesionnelle(): ?string
    {
        return $this->experienceProfesionnelle;
    }

    public function setExperienceProfesionnelle(string $experienceProfesionnelle): self
    {
        $this->experienceProfesionnelle = $experienceProfesionnelle;

        return $this;
    }

    public function getFormations(): ?string
    {
        return $this->Formations;
    }

    public function setFormations(string $Formations): self
    {
        $this->Formations = $Formations;

        return $this;
    }

    public function getCompetences(): ?string
    {
        return $this->Compétences;
    }

    public function setCompetences(string $Competences): self
    {
        $this->Competences = $Competences;

        return $this;
    }
}
