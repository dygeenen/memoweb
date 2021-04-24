<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TopicRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Liste des types de projet
 *
 * @ORM\Entity
 */
#[ApiResource(mercure: true)]
class Project
{
    /**
     * Indentifiant unique du type de projet
     *
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    public string $id = '';

    /**
     * Nom du type de projet
     *
     * @ORM\Column(type="string", length=255)
     */
    #[Assert\NotBlank]
    private string $name = '';

    public function getId(): ?string
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
}
