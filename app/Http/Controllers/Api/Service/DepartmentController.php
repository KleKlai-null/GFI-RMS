<?php

namespace App\Http\Controllers\Api\Service;

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\DepartmentCreateRequest;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;

class DepartmentController extends ApiController
{
    public function index()
    {
        try {

            $data = Department::all('id', 'name');

            return $this->sendResponse($data);

        } catch (Exception $exception) {
            return $this->sendError($exception);
        }
    }

    public function store(DepartmentCreateRequest $request)
    {
        try {

            $check = Department::where('name', 'like' ,$request->name)->first();

            if(is_null($check)) {
                $data = Department::create($request->validated());

                return $this->sendResponse($request->name . ' saved successfully.');
            }

            return $this->sendResponse($request->name . ' already exist!');

        } catch (Exception $exception) {

            return $this->sendError($exception);
        }

    }

    public function destroy(Request $request)
    {
        $data = Department::find($request->id);

        if($data){
            $data->delete();

            return $this->sendResponse($data->name . ' successfully deleted.');
        }

        return $this->sendError("Something wen't wrong. Please contact system administrator.");
    }
}
