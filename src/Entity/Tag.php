<?php

namespace App\Entity;

use App\Repository\TagRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TagRepository::class)]
class Tag
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public ?int $id = null;

    #[ORM\Column(length: 255)]
    public ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'tag', targetEntity: Excuse::class)]
    public Collection $excuses;

    public function __construct()
    {
        $this->excuses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection<int, Excuse>
     */
    public function getExcuses(): Collection
    {
        return $this->excuses;
    }

    public function addExcus(Excuse $excus): self
    {
        if (!$this->excuses->contains($excus)) {
            $this->excuses->add($excus);
            $excus->setTag($this);
        }

        return $this;
    }

    public function removeExcus(Excuse $excus): self
    {
        if ($this->excuses->removeElement($excus)) {
            // set the owning side to null (unless already changed)
            if ($excus->getTag() === $this) {
                $excus->setTag(null);
            }
        }

        return $this;
    }
}
