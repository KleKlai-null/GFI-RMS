<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SystemLogResource;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class ActivityLogController extends ApiController
{
    public function index()
    {
        
        $data = cache()->remember('activitylog-data', 60*60*24, function() {
            return Activity::all('created_at', 'event', 'description', 'properties');
        });

        return $this->sendResponse(SystemLogResource::collection($data));
    }
}
