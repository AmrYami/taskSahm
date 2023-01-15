<?php

namespace App\Services;

use App\Abstratctions\Service;
use App\Factories\ModulesFactory;
use App\Interfaces\ServiceStore;
use App\Models\NotificationModel;
use App\Repositories\NotificationRepository;
use Illuminate\Http\Request;
use Auth;

class NotificationServiceStore extends Service implements ServiceStore
{
    private $repo;
    private $realTimeService;

    /**
     * @var NotificationModel
     */
    private $model;

    /**
     * @var FCMTokenServiceShow
     */
    private $FCMTokenServiceShow;

    /**
     * Create a new Repository instance.
     *
     * @param NotificationRepository $repository
     * @return void
     */
    public function __construct(
        NotificationRepository $repository,
        RealTimeService $realTimeService,
//        FCMTokenServiceShow $FCMTokenServiceShow
    ) {
        $this->repo = $repository;
//        $this->FCMTokenServiceShow = $FCMTokenServiceShow;
        $this->realTimeService = $realTimeService;
    }


    public function updateMultiRaws(Request $request)
    {
        $data = ['seen' => '1'];
        $notification = $this->repo->updateRawsBySpecifiecColumn(['user_id', Auth::user()->id], $data);
        return $notification;
    }

    /**
     * Use save data into Repository
     *
     * @param Request $request
     * @param Int $id
     * @return Boolean
     */
    public function save(Request $request, $id = null, $relatedTypeId = null)
    {
//        try {
        if ($relatedTypeId) {
//            $request->merge(['created_by' => Auth::user()->id]);
            $request->merge($relatedTypeId);
        }
        $notification = $this->repo->save($request, $id);
//        } catch (\Exception $e) {
//            return false;
//        }
        return $notification;
    }

    /**
     * Use save data into Repository
     *
     * @param Request $request
     * @param Int $id
     * @return Boolean
     */
    public function update($id = null, Request $request)
    {
//        try {
        $request->request->add(['seen' => '1']);
        $notification = $this->repo->update($id, $request->all());
//        } catch (\Exception $e) {
//            return false;
//        }
        return $notification;
    }

    public function notificationAction($userId, $request, $url = null, $model, $data = []): void
    {
        $reqNotification = new Request();
//            $myClass = ModulesFactory::build('\App\Http\Controllers\PushController');
        $reqNotification->merge([
            'title' => $data['title'] ?? 'newItemNotificationTitle',
            'body' => $data['body'] ?? 'newItemNotificationBody',
            'user_id' => $userId,
            'type' => $data['type'] ?? 'new item',
            'icon' => $data['icon'] ?? 'flaticon2-line-chart kt-font-success',
            'route' => $url,
            'related_type' => get_class($model),
            'related_id' => $data['related_id'] ?? null
        ]);
        $res = $this->repo->create($reqNotification->all());
        $reqNotification->request->remove('related_type');
//        $reqNotification->request->remove('related_id');
        $reqNotification->merge([
            'id' => $res->id ?? null,
        ]);
//firebase notifications
//        $reqFCMToken = new Request();
//        $reqFCMToken->merge([
//            'user_id' => $userId
//        ]);
//        $fcmToken = $this->FCMTokenServiceShow->find_by($reqFCMToken);
//        if ($fcmToken)
//            $this->FCMTokenServiceShow->firebaseNotification($fcmToken[0]?->fcm_token, $reqNotification);
//firebase notifications
        $reqNotification->merge(['body' => 'notifications.'.$reqNotification->body]);
        $this->realTimeService->publishData($userId, $reqNotification->all(), 'notifications', 'message');
    }
}
