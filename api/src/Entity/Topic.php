<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TopicRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Liste des thèmes
 *
 * @ORM\Entity
 */
#[ApiResource(mercure: true)]
class Topic
{
    /**
     * Indentifiant unique du thème
     *
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    public string $id = '';

    /**
     * Nom du thème
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
