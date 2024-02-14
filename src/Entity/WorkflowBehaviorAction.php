<?php

namespace App\Entity;

use App\Repository\WorkflowBehaviorActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WorkflowBehaviorActionRepository::class)]
class WorkflowBehaviorAction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
