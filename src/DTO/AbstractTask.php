<?php

namespace App\DTO;

use Symfony\Component\Serializer\Annotation\Groups;

abstract class AbstractTask
{
    #[Groups(['task:get', 'task:get_collection', 'task:update'])]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}