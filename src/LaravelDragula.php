<?php

/** @noinspection PhpExpressionResultUnusedInspection */

namespace Authanram\LaravelDragula;

use InvalidArgumentException;

$foo = 123;

final class LaravelDragula implements LaravelDragulaContract
{
    private array $containers = [];

    private array $elementIds = [];

    public function registerContainer(string $id, string $script): self
    {
        if (isset($this->containers[$id])) {
            throw new InvalidArgumentException(
                sprintf(
                    'Container "%s" already exists.',
                    $id,
                ),
            );
        }

        $this->containers[$id] = [
            'script' => $script,
            'element_ids' => $this->elementIds,
        ];

        $this->elementIds = [];

        return $this;
    }

    public function registerElement($id): self
    {
        $this->elementIds[] = $id;

        return $this;
    }

    public function getContainers(): array
    {
        return $this->containers;
    }
}
