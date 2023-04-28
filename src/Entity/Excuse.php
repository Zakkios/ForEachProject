<?php

namespace App\Entity;

use App\Repository\ExcuseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExcuseRepository::class)]
class Excuse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column]
    public ?int $http_code = null;

    #[ORM\Column(length: 255)]
    public ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'excuses')]
    #[ORM\JoinColumn(nullable: false)]
    public ?Tag $tag = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHttpCode(): ?int
    {
        return $this->http_code;
    }

    public function setHttpCode(int $http_code): self
    {
        $this->http_code = $http_code;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTag(): ?Tag
    {
        return $this->tag;
    }

    public function setTag(?Tag $tag): self
    {
        $this->tag = $tag;

        return $this;
    }
}
