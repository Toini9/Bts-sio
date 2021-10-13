<?php

namespace App\Entity;

use App\Repository\MedPRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedPRepository::class)
 */
class MedP
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=Medicament::class, inversedBy="fkMedP")
     */
    private $idMedDpl;

    public function __construct()
    {
        $this->idMedDpl = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Medicament[]
     */
    public function getIdMedDpl(): Collection
    {
        return $this->idMedDpl;
    }

    public function addIdMedDpl(Medicament $idMedDpl): self
    {
        if (!$this->idMedDpl->contains($idMedDpl)) {
            $this->idMedDpl[] = $idMedDpl;
        }

        return $this;
    }

    public function removeIdMedDpl(Medicament $idMedDpl): self
    {
        $this->idMedDpl->removeElement($idMedDpl);

        return $this;
    }
}
