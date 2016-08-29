<?php
// app/Repositories/Contracts/CategoryRepositoryInterface.php

namespace App\Repositories\Contracts;

interface CategoryRepositoryInterface
{
    public function all();

    public function find($id);
}