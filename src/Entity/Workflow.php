<?php

namespace App\Entity;

use App\Repository\WorkflowRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: WorkflowRepository::class)]
class Workflow
{
    public const STATE_DRAFT = 'draft';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $number = null;

    #[ORM\Column]
    private ?bool $isActive = null;

    #[ORM\Column]
    private ?bool $isClosed = null;

    #[ORM\Column]
    private ?bool $isAttended = null;

    #[ORM\Column(length: 50)]
    private ?string $state = self::STATE_DRAFT;

    #[ORM\Column(length: 50)]
    private ?string $subState = self::STATE_DRAFT;

    #[ORM\Column(type: 'uuid')]
    private ?Uuid $uuid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function isIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function isIsClosed(): ?bool
    {
        return $this->isClosed;
    }

    public function setIsClosed(bool $isClosed): static
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    public function isIsAttended(): ?bool
    {
        return $this->isAttended;
    }

    public function setIsAttended(bool $isAttended): static
    {
        $this->isAttended = $isAttended;

        return $this;
    }

    public function getSubState(): ?string
    {
        return $this->subState;
    }

    public function setSubState(string $subState): static
    {
        $this->subState = $subState;

        return $this;
    }

    public function getUuid(): ?Uuid
    {
        return $this->uuid;
    }

    public function setUuid(Uuid $uuid): static
    {
        $this->uuid = $uuid;

        return $this;
    }
}
