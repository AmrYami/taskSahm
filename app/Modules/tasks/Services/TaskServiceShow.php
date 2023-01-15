<?php

namespace Tasks\Services;

use App\Interfaces\ServiceShow;
use Illuminate\Http\Request;
use Tasks\Repositories\TaskRepositoryShow;

class TaskServiceShow implements ServiceShow
{
    public $repo;

    /**
     * Create a new Repository instance.
     *
     * @param TaskRepository $repository
     * @return void
     */
    public function __construct(TaskRepositoryShow $repository)
    {
        $this->repo = $repository;
    }

    /**
     * Use Search Criteria from request to find from Repository
     *
     * @param Request $request
     * @return Collection
     */

    public function find_by(Request $request): object
    {
        $tasks = $this->repo->find_by($request->all());
        return $tasks;
    }

    /**
     * Use id to find from Repository
     *
     * @param Int $id
     */
    public function find($id, Request $request): object
    {
            $task = $this->repo->find($id);
            return $task;
    }


}
