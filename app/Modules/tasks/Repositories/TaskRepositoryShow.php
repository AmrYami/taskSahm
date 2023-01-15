<?php

namespace Tasks\Repositories;

use App\Interfaces\BaseRepositoryInterface;
use App\Interfaces\RepositoryShow;
use App\Repositories\BaseRepositoryShow;
use Illuminate\Container\Container as Application;
use Tasks\Models\Task;

/**
 * Class Repository
 * @package App\Repositories
 * @version December 11, 2019, 2:33 pm UTC
*/

class TaskRepositoryShow extends BaseRepositoryShow implements RepositoryShow, BaseRepositoryInterface
{


    /**
     * @var array
     */
    protected $fieldSearchable = [
        'provider_id'
    ];

    /**
     * Use Search Criteria from request to find from model
     *
     * @param  Array $request
     * @return Collection
     */

    public function find_by(array $request, $perPage = 25)
    {
            return $this->paginate($request, $perPage);
    }


    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model(): string
    {
        return Task::class;
    }

}
