<?php

namespace Authanram\LaravelDragula;

interface LaravelDragulaContract
{
    public function registerContainer(string $id, string $script): self;

    public function registerElement(string $id): self;

    public function getContainers(): array;
}
