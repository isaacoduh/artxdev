<?php

namespace App\Repositories;

interface ProductRepositoryInterface
{
    // get all
    public function get();

    // get one
    public function find($id);

    // create
    public function create(array $attributes);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Pagination
     * @param $perPage
     * @return mixed
     */
    public function paginate($perPage);

    /**
     * Pagination
     * @return mixed
     */
    public function latest();
}
