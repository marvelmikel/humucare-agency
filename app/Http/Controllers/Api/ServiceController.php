<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create(ServicesRequest $request)
    {
        // dd($request->all());
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = self::imageUploader($request->image, 'Service', 'Service_images');
            $data['image'] = $imagePath;

        }

        $service = Service::create($data);

        return response()->json([
            'service'=>$service,
            'message'=>'Service created successfully'
        ]);
    }

    public function update(ServicesRequest $request, $id=null)
    {
        // dd($request->all());

        $service = Service::find($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = self::imageUploader($request->image, 'Service', 'Service_images');
            $data['image'] = $imagePath;

        }
        $service->update($data);

        return response()->json([
            'service'=>$service,
            'message'=>'Service updated successfully'
        ]);
    }

    public function delete($id)
    {
        $service = Service::find($id);
        $service->delete();

        return response()->json([
            'message'=>'Service deleted successfully'
        ]);
    }

    public function display()
    {

        // dd('here');

        $services = Service::all();

        return response()->json([
            'services'=>$services,
            'message'=> $services ? 'Services found' : 'No services found'
        ]);

    }

    public function displayById($id=null)
    {
        $service = Service::find($id);

        return response()->json([
            'service'=>$service,
            'message'=> $service ? 'Service found' : 'No service found'
        ]);
    }







    public static function imageUploader($fileRequest, $user, $folderName)
    {
        $ext = $fileRequest->getClientOriginalExtension();
        $name = \Str::slug($user).time().".".$ext;

        $tempPath = $fileRequest->getRealPath();
        $destinationPath = public_path($folderName);

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $finalPath = $destinationPath . '/' . $name;


        if (copy($tempPath, $finalPath)) {
            return '/'.$folderName.'/'.$name;
        } else {
            throw new \Exception('File upload failed. Could not copy the file.');
        }
    }

}
