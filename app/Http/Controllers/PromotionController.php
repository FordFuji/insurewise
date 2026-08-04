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

class PromotionController extends Controller implements HasImagesContract
{
    use HasImages;

    // promotion
    public function promotion(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.promotion.list');
    }

    public function promotionServerProcessing() {
        $query = DB::table('promotion')
            ->orderBy('promotion.promotion_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('promotion_image', function($r) {
                return '<img src="'.asset('public/uploads/promotion/'.$r->promotion_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/promotion/form/".$r->promotion_id).'">Edit</a> / <a href="'.url("backend/promotion/promotion_delete/".$r->promotion_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['promotion_image', 'action'])->make(true);
    }

    public function promotion_form(Request $request, $promotion_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('promotion')
            ->where('promotion_id', $promotion_id)
            ->first();

        return view('backend.promotion.form', $data);
    }

    public function promotionSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'promotion_topic' => $request->input('promotion_topic'),
            'promotion_text1' => $request->input('promotion_text1'),
            'promotion_text2' => $request->input('promotion_text2'),
            'promotion_condition' => $request->input('promotion_condition'),
            'promotion_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('promotion_image')) {

            $image = $request->file('promotion_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(605, 275);
            $image_resize->save(public_path('uploads/promotion/'.$filename));

            $data['promotion_image'] = $filename;
        }

        if($request->hasFile('promotion_detail_image')) {

            $image = $request->file('promotion_detail_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/promotion/'.$filename));

            $data['promotion_detail_image'] = $filename;
        }

        if($request->input('promotion_id') != '') {
            // update
            DB::table('promotion')
                ->where('promotion_id', $request->input('promotion_id'))
                ->update($data);
        } else {
            // insert
            $data['promotion_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('promotion')->insert($data);
        }
        return redirect('backend/promotion/');
    }
    // end promotion
}