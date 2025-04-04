<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


interface BaseInterface
{
    public function all(): Collection;
    public function create(array $data): Model;
    public function find(int $id): ?Model;
    public function update(int $id, array $data): bool;
    public function delete(int $id): bool;
}
