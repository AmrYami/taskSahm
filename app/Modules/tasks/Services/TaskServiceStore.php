<?php

namespace Tasks\Services;

use App\Abstratctions\Service;
use App\Interfaces\ServiceStore;
use App\Services\NotificationServiceStore;
use Illuminate\Http\Request;
use Auth;
use Tasks\Models\Task;
use Tasks\Repositories\TaskRepositoryShow;
use Tasks\Repositories\TaskRepositoryStore;

class TaskServiceStore extends Service implements ServiceStore
{
    public $repo;
    /**
     * @var TaskRepositoryStore
     */
    private $taskRepositoryStore;
    /**
     * @var TaskRepositoryShow
     */
    private $taskRepositoryShow;
    /**
     * @var Task
     */
    private $model;
    /**
     * @var NotificationServiceStore
     */
    private $notificationService;

    /**
     * Create a new Repository instance.
     *
     * @param TaskRepositoryStore $taskRepositoryStore
     * @param TaskRepositoryShow $taskRepositoryShow
     */
    public function __construct(TaskRepositoryStore $taskRepositoryStore, TaskRepositoryShow $taskRepositoryShow,
                                Task $model, NotificationServiceStore $notificationService)
    {
        $this->taskRepositoryStore = $taskRepositoryStore;
        $this->taskRepositoryShow = $taskRepositoryShow;
        $this->notificationService = $notificationService;
        $this->model = $model;
    }


    /**
     * Use save data into Repository
     *
     * @param Request $request
     * @return Boolean
     */
    public function save(Request $request)
    {
        $data = $request->only($this->model->getFillable());
        $task = $this->taskRepositoryStore->create($data);
        $dataNotification = [
            'title' => Auth::user()->name,
            'body' => 'new task',
            'task_id' => $task->id,
            'action' => 'create',
            'type' => 'task',
            'icon' => 'flaticon2-line-chart kt-font-success',
        ];
        $this->notificationService->notificationAction($data['emp_id'], $request, "asdasd", $this->model, $dataNotification);




        return $task;
    }

    /**
     * Use save data into Repository
     *
     * @param Request $request
     * @return Boolean
     */
    public function update($id, Request $request)
    {
        $data = $request->only($this->model->getFillable());
        $task = $this->taskRepositoryStore->update($id, $data);
        if ($task) {
            $taskObject = $this->taskRepositoryShow->find($id);
            $states = [
                0 => 'NO ACTION',
                1 => 'COMPLETED',
                2 => 'INPROGRESS',
                3 => 'CANCELLED',
                4 => 'HOLD'
            ];
            $dataNotification = [
                'title' => Auth::user()->name,
                'body' => 'task state: '. $states[$taskObject->status],
                'type' => $states[$taskObject->status],
                'icon' => 'flaticon2-line-chart kt-font-success',
                'task_id' => $taskObject->id,
                'action' => 'edit',
            ];
            $this->notificationService->notificationAction($taskObject->admin_id, $request, "asdasd", $this->model, $dataNotification);

        }
            return $task;
//
    }

    /**
     * Remove data from the Repository
     *
     * @param Request $request
     * @param Int $id
     * @return Boolean
     */
    public function delete(Request $request, $id = null)
    {
        $this->clean_request($request);
        $delete = $this->taskRepositoryStore->delete($id, $request->all());
        return $delete;
    }

}

