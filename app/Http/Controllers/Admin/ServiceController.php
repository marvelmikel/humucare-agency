<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    public function createView()
    {
        return view('admin.services.create');
    }

    public function create(ServicesRequest $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = self::imageUploader($request->image, 'Service', 'Service_images');
            $data['image'] = 'https://humucarecleaning.co.uk'.$imagePath;
            $data['local_image_path'] = $imagePath;

        }
        else{
            $data['image'] = null;

        }

        $service = Service::create($data);

            Alert::html('✅ Success',
            '<p> "'.$data['title'].'" Service created successfully!</p>
            <h6>Service Image</h6>
            <img src="' . $data['image'] . '" alt="Service Image" style="width:100px; border-radius:8px; margin-top:10px;">',
            'success'
        );

        //     Alert::html('✅ Success',
        //     '<p> "'.$data['title'].'" Service created successfully!</p>
        //     <h6>Service Image</h6>
        //     <img src="' . $data['local_image_path'] . '" alt="Service Image" style="width:100px; border-radius:8px; margin-top:10px;">',
        //     'success'
        // );
        return back();

    }

    public function allServices()
    {
        $data['services'] = Service::all();
        return view('admin.services.all', $data);

    }

    public function updateView($id= null)
    {

        $data['service'] = Service::find(request()->id);
        return view('admin.services.update', $data);
    }

    public function update(ServicesRequest $request, $id=null)
    {
        $service = Service::find($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            $imagePath = self::imageUploader($request->image, 'Service', 'Service_images');
            $data['image'] = 'https://humucarecleaning.co.uk'.$imagePath;
            $data['local_image_path'] = $imagePath;

        }else{
            $data['image'] = null;

        }
        $service->update($data);

         Alert::html('✅ Success',
        '<p> "'.$data['title'].'" Service Updated successfully!</p>
        <h6>Service Image</h6>
        <img src="' . $data['image'] . '" alt="Service Image" style="width:100px; border-radius:8px; margin-top:10px;">',
        'success'
    );

    //     Alert::html('✅ Success',
    //     '<p> "'.$data['title'].'" Service Updated successfully!</p>
    //     <h6>Service Image</h6>
    //     <img src="' . $data['local_image_path'] . '" alt="Service Image" style="width:100px; border-radius:8px; margin-top:10px;">',
    //     'success'
    // );
        return back();
    }


    public function delete($id = null)
    {
        $service = Service::find($id);
        $service->delete();

        Alert::success('Success', 'Service deleted successfully');
        return back();
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
