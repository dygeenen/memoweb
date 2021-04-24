<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Liste des campus
 *
 * @ORM\Entity
 */
#[ApiResource(mercure: true)]
class Campus
{
    /**
     * Indentifiant unique du campus
     *
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     */
    public string $id = '';

    /**
     * Nom du campus
     *
     * @ORM\Column
     */
    #[Assert\NotBlank]
    public string $name = '';

    public function getId(): ?string
    {
        return $this->id;
    }
}
