<?php

namespace App\Services;

use App\Helpers\MoreImplementation;
use App\Interfaces\ServiceShow;
use App\Repositories\NotificationRepositoryShow;
use Illuminate\Http\Request;
use Auth;

class NotificationServiceShow implements ServiceShow
{
    private $repo;
    private $realTimeService;

    /**
     * Create a new Repository instance.
     *
     * @param NotificationRepositoryShow $repository
     * @return void
     */
    public function __construct(NotificationRepositoryShow $repository, RealTimeService $realTimeService)
    {
        $this->repo = $repository;
        $this->realTimeService = $realTimeService;
    }

    /**
     * Use Search Criteria from request to find from Repository
     *
     * @param Request $request
     * @return Collection
     */

    public function find_by(Request $request): object
    {
        $request->request->add(['user_id' => auth()->user()->id]);
//        MoreImplementation::
//        $orderBy = [['id', 'desc'], ['seen', 'asc']];
        $orderBy = [['id', 'desc']];
        MoreImplementation::setWith(['user']);
        $notification = $this->repo->find_by($request->all());
        return $notification;
    }

    public function find_by_paginated(Request $request, $perPage = 25, $orderBy = null): object
    {
        $request->request->add(['user_id' => auth()->user()->id]);
        $orderBy = [['id', 'desc']];
        MoreImplementation::setWith(['user']);
        $notification = $this->repo->find_by_paginated($request->all(), $perPage, $orderBy);
        return $notification;
    }

    /**
     * Use id to find from Repository
     *
     * @param Int $id
     * @return Notification
     */
    public function find($id, Request $request): object
    {
        $notification = $this->repo->find($id);
        return $notification;
    }
}
