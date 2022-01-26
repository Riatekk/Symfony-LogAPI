<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\LogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogRepository::class)]
#[ApiResource(
    collectionOperations: ['get','post'],
    itemOperations: ['get']
)]
class Log
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $Datetime;

    #[ORM\Column(type: 'string', length: 255)]
    private $Tag;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $Description;

    #[ORM\Column(type: 'string', length: 255)]
    private $IdUtilisateur;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->Datetime;
    }

    public function setDatetime(\DateTimeInterface $Datetime): self
    {
        $this->Datetime = $Datetime;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->Tag;
    }

    public function setTag(string $Tag): self
    {
        $this->Tag = $Tag;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getIdUtilisateur(): ?string
    {
        return $this->IdUtilisateur;
    }

    public function setIdUtilisateur(string $IdUtilisateur): self
    {
        $this->IdUtilisateur = $IdUtilisateur;

        return $this;
    }
}
