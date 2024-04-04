<?php

use App\DTO\AbstractTask;
use App\DTO\Task;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class Test extends KernelTestCase
{
    public function testSomething(): void
    {
        $task = new Task();
        $this->normalize($task);
    }

    public function normalize(AbstractTask $entity): array
    {
        $normalizer = new ObjectNormalizer();
        return $normalizer->normalize($entity);
    }
}