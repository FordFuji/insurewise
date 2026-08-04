<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\DataTables;
use Illuminate\Database\Eloquent\Model;
use EveryWell\Imagination\Traits\HasImages;
use EveryWell\Imagination\Contracts\HasImages as HasImagesContract;
use Image;

class InsuranceCarController extends Controller implements HasImagesContract
{
    use HasImages;

    // brand_car
    public function brand_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.brand_car.list');
    }

    public function brand_carServerProcessing() {
        $query = DB::table('brand_car')
            ->orderBy('brand_car.brand_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/brand_car/'.$r->brand_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/brand_car/form/".$r->brand_car_id).'">Edit</a> / <a href="'.url("backend/brand_car/brand_car_delete/".$r->brand_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function brand_car_form(Request $request, $brand_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('brand_car')
            ->where('brand_car_id', $brand_car_id)
            ->first();

        return view('backend.brand_car.form', $data);
    }

    public function brand_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'brand_car_name' => $request->input('brand_car_name'),
            'brand_car_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('brand_car_image')) {

        //     $image = $request->file('brand_car_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/brand_car/'.$filename));

        //     $data['brand_car_image'] = $filename;
        // }

        if($request->input('brand_car_id') != '') {
            // update
            DB::table('brand_car')
                ->where('brand_car_id', $request->input('brand_car_id'))
                ->update($data);
        } else {
            // insert
            $data['brand_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('brand_car')->insert($data);
        }
        return redirect('backend/brand_car/');
    }
    // end brand_car
}