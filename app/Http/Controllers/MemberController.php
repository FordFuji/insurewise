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

class MemberController extends Controller implements HasImagesContract
{
    use HasImages;

    // member
    public function member(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.member.list');
    }

    public function memberServerProcessing() {
        $query = DB::table('member')
            ->orderBy('member_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/member/'.$r->member_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/member/form/".$r->member_id).'">Edit</a> / <a href="'.url("backend/member/member_delete/".$r->member_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function member_form(Request $request, $member_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('member')
            ->where('member_id', $member_id)
            ->first();

        return view('backend.member.form', $data);
    }

    public function memberSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'member_name' => $request->input('member_name'),
            'member_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('member_image')) {

        //     $image = $request->file('member_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/member/'.$filename));

        //     $data['member_image'] = $filename;
        // }

        if($request->input('member_id') != '') {
            // update
            DB::table('member')
                ->where('member_id', $request->input('member_id'))
                ->update($data);
        } else {
            // insert
            $data['member_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('member')->insert($data);
        }
        return redirect('backend/member/');
    }
    // end member
}