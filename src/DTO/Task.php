<?php

namespace App\DTO;

use Symfony\Component\Serializer\Annotation\Context;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

class Task extends AbstractTask
{
//    #[ORM\Column]
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i:s'])]
    #[Groups(['task:get', 'task:get_collection'])]
    private ?\DateTimeImmutable $createdAt = null;

//    #[ORM\Column(nullable: true)]
    #[Context([DateTimeNormalizer::FORMAT_KEY => 'Y-m-d H:i:s'])]
    #[Groups(['task:get', 'task:get_collection', 'task:update'])]
    private ?\DateTimeImmutable $closedAt = null;

//    #[ORM\Column]
    #[Groups(['task:get', 'task:get_collection'])]
    private ?int $authorId = null;

//    #[ORM\Column(nullable: true)]
    #[Groups(['task:get', 'task:get_collection'])]
    private ?int $performerId = null;

//    #[ORM\Column(nullable: false)]
    #[Groups(['task:get', 'task:get_collection', 'task:create', 'task:update'])]
    private ?int $taskProblemTypeId = null;

//    #[ORM\Column(nullable: true)]
    #[Groups(['task:get', 'task:get_collection', 'task:create', 'task:update'])]
    private ?int $taskClosureTypeId = null;

//    #[ORM\Column(type: Types::SIMPLE_ARRAY, nullable: true)]
    #[Groups(['task:get', 'task:get_collection', 'task:create', 'task:update'])]
    private array $note = [];

//    #[ORM\Column(nullable: true)]
    #[Groups(['task:get', 'task:get_collection', 'task:create', 'task:update'])]
    private ?int $taskSolutionTypeId = null;

    #[Groups(['task:create', 'task:update'])]
    private ?string $comment = null;

    #[Groups(['task:update'])]
    private ?int $status = null;


    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getClosedAt(): ?\DateTimeImmutable
    {
        return $this->closedAt;
    }

    public function setClosedAt(?\DateTimeImmutable $closedAt): static
    {
        $this->closedAt = $closedAt;

        return $this;
    }

    public function getAuthorId(): ?int
    {
        return $this->authorId;
    }

    public function setAuthorId(int $authorId): static
    {
        $this->authorId = $authorId;

        return $this;
    }

    public function getPerformerId(): ?int
    {
        return $this->performerId;
    }

    public function setPerformerId(?int $performerId): static
    {
        $this->performerId = $performerId;

        return $this;
    }

    public function getTaskProblemTypeId(): ?int
    {
        return $this->taskProblemTypeId;
    }

    public function setTaskProblemTypeId(?int $taskProblemTypeId): static
    {
        $this->taskProblemTypeId = $taskProblemTypeId;

        return $this;
    }

    public function getTaskClosureTypeId(): ?int
    {
        return $this->taskClosureTypeId;
    }

    public function setTaskClosureTypeId(?int $taskClosureTypeId): static
    {
        $this->taskClosureTypeId = $taskClosureTypeId;

        return $this;
    }

    public function getNote(): array
    {
        return $this->note;
    }

    public function setNote(array $note): static
    {
        $this->note = $note;

        return $this;
    }

    public function getTaskSolutionTypeId(): ?int
    {
        return $this->taskSolutionTypeId;
    }

    public function setTaskSolutionTypeId(?int $taskSolutionTypeId): static
    {
        $this->taskSolutionTypeId = $taskSolutionTypeId;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(string $comment): self
    {
        $this->comment = $comment;
        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }

}
