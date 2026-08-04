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

    // sub_model_car
    public function sub_model_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.sub_model_car.list');
    }

    public function sub_model_carServerProcessing() {
        $query = DB::table('sub_model_car')
            ->join('model_car', 'sub_model_car.model_car_id', '=', 'model_car.model_car_id')
            ->join('brand_car', 'model_car.brand_car_id', '=', 'brand_car.brand_car_id')
            ->select('sub_model_car.sub_model_car_id', 'brand_car.brand_car_name', 'model_car.model_car_name', 'sub_model_car.sub_model_car_name')
            ->orderBy('sub_model_car.sub_model_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/sub_model_car/'.$r->sub_model_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/sub_model_car/form/".$r->sub_model_car_id).'">Edit</a> / <a href="'.url("backend/sub_model_car/sub_model_car_delete/".$r->sub_model_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function sub_model_car_form(Request $request, $sub_model_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('sub_model_car')
            ->where('sub_model_car_id', $sub_model_car_id)
            ->join('model_car', 'sub_model_car.model_car_id', '=', 'model_car.model_car_id')
            ->join('brand_car', 'model_car.brand_car_id', '=', 'brand_car.brand_car_id')
            ->first();

        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        if(!empty($data['row'])) {
            $data['model_car'] = DB::table('model_car')
                ->where('brand_car_id', '=', $data['row']->brand_car_id)
                ->get();
        }

        return view('backend.sub_model_car.form', $data);
    }

    public function sub_model_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'model_car_id' => $request->input('model_car_id'),
            'sub_model_car_name' => $request->input('sub_model_car_name'),
            'sub_model_car_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('sub_model_car_image')) {

        //     $image = $request->file('sub_model_car_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/sub_model_car/'.$filename));

        //     $data['sub_model_car_image'] = $filename;
        // }

        if($request->input('sub_model_car_id') != '') {
            // update
            DB::table('sub_model_car')
                ->where('sub_model_car_id', $request->input('sub_model_car_id'))
                ->update($data);
        } else {
            // insert
            $data['sub_model_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('sub_model_car')->insert($data);
        }
        return redirect('backend/sub_model_car/');
    }

    public function ajaxChangeBrandCar(Request $request) {
        $model_car = DB::table('model_car')
            ->where('brand_car_id', '=', $request->input('brand_car_id'))
            ->get();

        if(!empty($model_car)) {
?>
                <option value="">Please Select</option>
<?php
            foreach($model_car as $r) {
?>
                <option value="<?php echo $r->model_car_id;?>"><?php echo $r->model_car_name;?></option>
<?php
            }
        }
    }
    // end sub_model_car

    // model_car
    public function model_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.model_car.list');
    }

    public function model_carServerProcessing() {
        $query = DB::table('model_car')
            ->join('brand_car', 'model_car.brand_car_id', '=', 'brand_car.brand_car_id')
            ->select('model_car.model_car_id', 'brand_car.brand_car_name', 'model_car.model_car_name')
            ->orderBy('model_car.model_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/model_car/'.$r->model_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/model_car/form/".$r->model_car_id).'">Edit</a> / <a href="'.url("backend/model_car/model_car_delete/".$r->model_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function model_car_form(Request $request, $model_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        $data['row'] = DB::table('model_car')
            ->where('model_car_id', $model_car_id)
            ->first();

        return view('backend.model_car.form', $data);
    }

    public function model_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'brand_car_id' => $request->input('brand_car_id'),
            'model_car_name' => $request->input('model_car_name'),
            'model_car_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('model_car_image')) {

        //     $image = $request->file('model_car_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/model_car/'.$filename));

        //     $data['model_car_image'] = $filename;
        // }

        if($request->input('model_car_id') != '') {
            // update
            DB::table('model_car')
                ->where('model_car_id', $request->input('model_car_id'))
                ->update($data);
        } else {
            // insert
            $data['model_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('model_car')->insert($data);
        }
        return redirect('backend/model_car/');
    }
    // end model_car

    // year_car
    public function year_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.year_car.list');
    }

    public function year_carServerProcessing() {
        $query = DB::table('year_car')
            ->orderBy('year_car.year_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/year_car/'.$r->year_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/year_car/form/".$r->year_car_id).'">Edit</a> / <a href="'.url("backend/year_car/year_car_delete/".$r->year_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function year_car_form(Request $request, $year_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('year_car')
            ->where('year_car_id', $year_car_id)
            ->first();

        return view('backend.year_car.form', $data);
    }

    public function year_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'year_car_name' => $request->input('year_car_name'),
            'year_car_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('year_car_image')) {

        //     $image = $request->file('year_car_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/year_car/'.$filename));

        //     $data['year_car_image'] = $filename;
        // }

        if($request->input('year_car_id') != '') {
            // update
            DB::table('year_car')
                ->where('year_car_id', $request->input('year_car_id'))
                ->update($data);
        } else {
            // insert
            $data['year_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('year_car')->insert($data);
        }
        return redirect('backend/year_car/');
    }
    // end year_car

    // car_faq
    public function car_faq(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.car_faq.list');
    }

    public function car_faqServerProcessing() {
        $query = DB::table('car_faq')
            ->orderBy('car_faq.car_faq_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/car_faq/'.$r->car_faq_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/car_faq/form/".$r->car_faq_id).'">Edit</a> / <a href="'.url("backend/car_faq/car_faq_delete/".$r->car_faq_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function car_faq_form(Request $request, $car_faq_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('car_faq')
            ->where('car_faq_id', $car_faq_id)
            ->first();

        return view('backend.car_faq.form', $data);
    }

    public function car_faqSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'car_faq_question' => $request->input('car_faq_question'),
            'car_faq_answer' => $request->input('car_faq_answer'),
            'car_faq_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('car_faq_image')) {

        //     $image = $request->file('car_faq_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/car_faq/'.$filename));

        //     $data['car_faq_image'] = $filename;
        // }

        if($request->input('car_faq_id') != '') {
            // update
            DB::table('car_faq')
                ->where('car_faq_id', $request->input('car_faq_id'))
                ->update($data);
        } else {
            // insert
            $data['car_faq_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('car_faq')->insert($data);
        }
        return redirect('backend/car_faq/');
    }
    // end car_faq

    // level_car
    public function level_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.level_car.list');
    }

    public function level_carServerProcessing() {
        $query = DB::table('level_car')
            ->orderBy('level_car.level_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/level_car/'.$r->level_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/level_car/form/".$r->level_car_id).'">Edit</a> / <a href="'.url("backend/level_car/level_car_delete/".$r->level_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function level_car_form(Request $request, $level_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('level_car')
            ->where('level_car_id', $level_car_id)
            ->first();

        return view('backend.level_car.form', $data);
    }

    public function level_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'level_car_name' => $request->input('level_car_name'),
            'level_car_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('level_car_image')) {

        //     $image = $request->file('level_car_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/level_car/'.$filename));

        //     $data['level_car_image'] = $filename;
        // }

        if($request->input('level_car_id') != '') {
            // update
            DB::table('level_car')
                ->where('level_car_id', $request->input('level_car_id'))
                ->update($data);
        } else {
            // insert
            $data['level_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('level_car')->insert($data);
        }
        return redirect('backend/level_car/');
    }
    // end level_car

    // damages_first
    public function damages_first(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.damages_first.list');
    }

    public function damages_firstServerProcessing() {
        $query = DB::table('damages_first')
            ->orderBy('damages_first.damages_first_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/damages_first/'.$r->damages_first_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/damages_first/form/".$r->damages_first_id).'">Edit</a> / <a href="'.url("backend/damages_first/damages_first_delete/".$r->damages_first_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function damages_first_form(Request $request, $damages_first_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('damages_first')
            ->where('damages_first_id', $damages_first_id)
            ->first();

        return view('backend.damages_first.form', $data);
    }

    public function damages_firstSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'damages_first_name' => $request->input('damages_first_name'),
            'damages_first_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('damages_first_image')) {

        //     $image = $request->file('damages_first_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/damages_first/'.$filename));

        //     $data['damages_first_image'] = $filename;
        // }

        if($request->input('damages_first_id') != '') {
            // update
            DB::table('damages_first')
                ->where('damages_first_id', $request->input('damages_first_id'))
                ->update($data);
        } else {
            // insert
            $data['damages_first_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('damages_first')->insert($data);
        }
        return redirect('backend/damages_first/');
    }
    // end damages_first

    // type_repair
    public function type_repair(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.type_repair.list');
    }

    public function type_repairServerProcessing() {
        $query = DB::table('type_repair')
            ->orderBy('type_repair.type_repair_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/type_repair/'.$r->type_repair_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/type_repair/form/".$r->type_repair_id).'">Edit</a> / <a href="'.url("backend/type_repair/type_repair_delete/".$r->type_repair_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }

    public function type_repair_form(Request $request, $type_repair_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('type_repair')
            ->where('type_repair_id', $type_repair_id)
            ->first();

        return view('backend.type_repair.form', $data);
    }

    public function type_repairSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'type_repair_name' => $request->input('type_repair_name'),
            'type_repair_datetime_update' => date('Y-m-d H:i:s')
        );

        // if($request->hasFile('type_repair_image')) {

        //     $image = $request->file('type_repair_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(474, 510);
        //     $image_resize->save(public_path('uploads/type_repair/'.$filename));

        //     $data['type_repair_image'] = $filename;
        // }

        if($request->input('type_repair_id') != '') {
            // update
            DB::table('type_repair')
                ->where('type_repair_id', $request->input('type_repair_id'))
                ->update($data);
        } else {
            // insert
            $data['type_repair_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('type_repair')->insert($data);
        }
        return redirect('backend/type_repair/');
    }
    // end type_repair

    // insurance_car
    public function insurance_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.insurance_car.list');
    }

    public function insurance_carServerProcessing() {
        $query = DB::table('insurance_car')
            ->join('level_car', 'insurance_car.level_car_id', '=', 'level_car.level_car_id')
            ->join('damages_first', 'insurance_car.damages_first_id', '=', 'damages_first.damages_first_id')
            ->join('type_repair', 'insurance_car.type_repair_id', '=', 'type_repair.type_repair_id')
            // ->join('car_company', 'insurance_car.insurance_company_id', '=', 'car_company.car_company_id')
            ->select('level_car.level_car_id', 'insurance_car.insurance_car_image', 'insurance_car.insurance_car_id', 'insurance_car.insurance_car_name', 'level_car.level_car_name', 'damages_first.damages_first_name', 'type_repair.type_repair_name', 'insurance_car.insurance_car_premium_price', 'insurance_car.insurance_car_prb')
            ->orderBy('insurance_car.insurance_car_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('insurance_car_image', function($r) {
                return '<img src="'.asset('public/uploads/insurance_car/'.$r->insurance_car_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/insurance_car/form/".$r->insurance_car_id).'">Edit</a> / <a href="'.url("backend/insurance_car/insurance_car_delete/".$r->insurance_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['insurance_car_image', 'action'])->make(true);
    }

    public function insurance_car_form(Request $request, $insurance_car_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('insurance_car')
            ->join('level_car', 'insurance_car.level_car_id', '=', 'level_car.level_car_id')
            ->join('damages_first', 'insurance_car.damages_first_id', '=', 'damages_first.damages_first_id')
            ->join('type_repair', 'insurance_car.type_repair_id', '=', 'type_repair.type_repair_id')
            ->where('insurance_car.insurance_car_id', $insurance_car_id)
            ->first();

        $data['insurance_car_id'] = $insurance_car_id;

        $data['brand_car'] = DB::table('brand_car')
            ->orderBy('brand_car_id', 'asc')
            ->get();

        $data['model_car'] = DB::table('model_car')
            ->orderBy('model_car_id', 'asc')
            ->get();

        $data['sub_model_car'] = DB::table('sub_model_car')
            ->orderBy('sub_model_car_id', 'asc')
            ->get();

        $data['year_car'] = DB::table('year_car')
            ->orderBy('year_car_id', 'asc')
            ->get();

        $data['level_car'] = DB::table('level_car')
            ->orderBy('level_car_id', 'asc')
            ->get();

        $data['damages_first'] = DB::table('damages_first')
            ->orderBy('damages_first_id', 'asc')
            ->get();

        $data['type_repair'] = DB::table('type_repair')
            ->orderBy('type_repair_id', 'asc')
            ->get();

        $data['insurance_company'] = DB::table('insurance_company')
            ->orderBy('insurance_company_id', 'asc')
            ->get();

        // dd($data['insurance_company']);

        return view('backend.insurance_car.form', $data);
    }

    public function insurance_carSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'insurance_car_text1' => $request->input('insurance_car_text1'),
            'insurance_car_text2' => $request->input('insurance_car_text2'),
            'insurance_car_text3' => $request->input('insurance_car_text3'),
            'insurance_car_text4' => $request->input('insurance_car_text4'),
            'insurance_car_text5' => $request->input('insurance_car_text5'),
            'insurance_car_text6' => $request->input('insurance_car_text6'),
            'brand_car_id' => $request->input('brand_car_id'),
            'model_car_id' => $request->input('model_car_id'),
            'year_car_id' => $request->input('year_car_id'),
            'level_car_id' => $request->input('level_car_id'),
            'damages_first_id' => $request->input('damages_first_id'),
            'type_repair_id' => $request->input('type_repair_id'),
            'sub_model_car_id' => $request->input('sub_model_car_id'),
            'insurance_company_id' => $request->input('insurance_company_id'),
            'insurance_car_register_province' => $request->input('insurance_car_register_province'),
            'insurance_car_name' => $request->input('insurance_car_name'),
            'insurance_car_prb' => $request->input('insurance_car_prb'),
            'insurance_car_premium_price' => $request->input('insurance_car_premium_price'),
            'insurance_car_lost_fire_price' => $request->input('insurance_car_lost_fire_price'),
            'insurance_car_equiment_damage_price' => $request->input('insurance_car_equiment_damage_price'),
            'insurance_car_first_damage_price' => $request->input('insurance_car_first_damage_price'),
            'insurance_car_price' => $request->input('insurance_car_price'),
            'insureance_car_text1_1' => $request->input('insureance_car_text1_1'),
            'insureance_car_text1_2' => $request->input('insureance_car_text1_2'),
            'insureance_car_text1_3' => $request->input('insureance_car_text1_3'),
            'insureance_car_text1_4' => $request->input('insureance_car_text1_4'),
            'insureance_car_text2_1' => $request->input('insureance_car_text2_1'),
            'insureance_car_text2_2' => $request->input('insureance_car_text2_2'),
            'insureance_car_text3_1' => $request->input('insureance_car_text3_1'),
            'insureance_car_text3_2' => $request->input('insureance_car_text3_2'),
            'insureance_car_text3_3' => $request->input('insureance_car_text3_3'),
            'insureance_car_text4_1' => $request->input('insureance_car_text4_1'),
            'insureance_car_text4_2' => $request->input('insureance_car_text4_2'),
            'insureance_car_text4_3' => $request->input('insureance_car_text4_3'),
            'insureance_car_text4_4' => $request->input('insureance_car_text4_4'),
            'insureance_car_value1_1' => $request->input('insureance_car_value1_1'),
            'insureance_car_value1_2' => $request->input('insureance_car_value1_2'),
            'insureance_car_value1_3' => $request->input('insureance_car_value1_3'),
            'insureance_car_value1_4' => $request->input('insureance_car_value1_4'),
            'insureance_car_value2_1' => $request->input('insureance_car_value2_1'),
            'insureance_car_value2_2' => $request->input('insureance_car_value2_2'),
            'insureance_car_value3_1' => $request->input('insureance_car_value3_1'),
            'insureance_car_value3_2' => $request->input('insureance_car_value3_2'),
            'insureance_car_value3_3' => $request->input('insureance_car_value3_3'),
            'insureance_car_value4_1' => $request->input('insureance_car_value4_1'),
            'insureance_car_value4_2' => $request->input('insureance_car_value4_2'),
            'insureance_car_value4_3' => $request->input('insureance_car_value4_3'),
            'insureance_car_value4_4' => $request->input('insureance_car_value4_4'),
            'insurance_car_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('insurance_car_image')) {

            $image = $request->file('insurance_car_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(474, 510);
            $image_resize->save(public_path('uploads/insurance_car/'.$filename));

            $data['insurance_car_image'] = $filename;
        }

        if($request->input('insurance_car_id') != '') {
            // update
            DB::table('insurance_car')
                ->where('insurance_car_id', $request->input('insurance_car_id'))
                ->update($data);

            
        } else {
            // insert
            $data['insurance_car_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('insurance_car')->insert($data);
        }

        return redirect('backend/insurance_car/');
    }
    // end insurance_car

    // contact_car
    public function contact_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.contact_car.list');
    }

    public function contact_carServerProcessing() {
        $query = DB::table('contact_car')
            ->orderBy('contact_car.contact_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/contact_car/'.$r->contact_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/contact_car/form/".$r->contact_car_id).'">Edit</a> / <a href="'.url("backend/contact_car/contact_car_delete/".$r->contact_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // End contact_car

    // car_company
    public function car_company(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.car_company.list');
    }

    public function car_companyServerProcessing() {
        $query = DB::table('car_company')
            ->orderBy('car_company.car_company_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('car_company_image', function($r) {
                return '<img src="'.asset('public/uploads/car_company/'.$r->car_company_image).'" width="60">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/car_company/form/".$r->car_company_id).'">Edit</a> / <a href="'.url("backend/car_company/car_company_delete/".$r->car_company_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['car_company_image', 'action'])->make(true);
    }

    public function car_company_form(Request $request, $car_company_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('car_company')
            ->where('car_company_id', $car_company_id)
            ->first();

        return view('backend.car_company.form', $data);
    }

    public function car_companySaveUpdate(Request $request) {
        // upload file
        $data = array(
            'car_company_link' => $request->input('car_company_link'),
            'car_company_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('car_company_image')) {

            $image = $request->file('car_company_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(91, 68);
            $image_resize->save(public_path('uploads/car_company/'.$filename));

            $data['car_company_image'] = $filename;
        }

        if($request->input('car_company_id') != '') {
            // update
            DB::table('car_company')
                ->where('car_company_id', $request->input('car_company_id'))
                ->update($data);
        } else {
            // insert
            $data['car_company_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('car_company')->insert($data);
        }
        return redirect('backend/car_company/');
    }
    // end car_company

    // car_table_insurance
    public function car_table_insurance(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('car_table_insurance')
            ->where('car_table_insurance_id', 1)
            ->first();

        return view('backend.car_table_insurance.form', $data);
    }

    public function car_table_insuranceSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'car_table_insurance_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->input('car_table_insurance_property_1') == 'Yes') {
            $data['car_table_insurance_property_1'] = 'Yes';
        } else {
            $data['car_table_insurance_property_1'] = 'No';
        }

        if($request->input('car_table_insurance_property_2p') == 'Yes') {
            $data['car_table_insurance_property_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_property_2p'] = 'No';
        }

        if($request->input('car_table_insurance_property_2') == 'Yes') {
            $data['car_table_insurance_property_2'] = 'Yes';
        } else {
            $data['car_table_insurance_property_2'] = 'No';
        }

        if($request->input('car_table_insurance_property_3p') == 'Yes') {
            $data['car_table_insurance_property_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_property_3p'] = 'No';
        }

        if($request->input('car_table_insurance_property_3') == 'Yes') {
            $data['car_table_insurance_property_3'] = 'Yes';
        } else {
            $data['car_table_insurance_property_3'] = 'No';
        }

        if($request->input('car_table_insurance_person_1') == 'Yes') {
            $data['car_table_insurance_person_1'] = 'Yes';
        } else {
            $data['car_table_insurance_person_1'] = 'No';
        }

        if($request->input('car_table_insurance_person_2p') == 'Yes') {
            $data['car_table_insurance_person_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_person_2p'] = 'No';
        }

        if($request->input('car_table_insurance_person_2') == 'Yes') {
            $data['car_table_insurance_person_2'] = 'Yes';
        } else {
            $data['car_table_insurance_person_2'] = 'No';
        }

        if($request->input('car_table_insurance_person_3p') == 'Yes') {
            $data['car_table_insurance_person_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_person_3p'] = 'No';
        }

        if($request->input('car_table_insurance_person_3') == 'Yes') {
            $data['car_table_insurance_person_3'] = 'Yes';
        } else {
            $data['car_table_insurance_person_3'] = 'No';
        }

        if($request->input('car_table_insurance_car_fire_1') == 'Yes') {
            $data['car_table_insurance_car_fire_1'] = 'Yes';
        } else {
            $data['car_table_insurance_car_fire_1'] = 'No';
        }

        if($request->input('car_table_insurance_car_fire_2p') == 'Yes') {
            $data['car_table_insurance_car_fire_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_car_fire_2p'] = 'No';
        }

        if($request->input('car_table_insurance_car_fire_2') == 'Yes') {
            $data['car_table_insurance_car_fire_2'] = 'Yes';
        } else {
            $data['car_table_insurance_car_fire_2'] = 'No';
        }

        if($request->input('car_table_insurance_car_fire_3p') == 'Yes') {
            $data['car_table_insurance_car_fire_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_car_fire_3p'] = 'No';
        }

        if($request->input('car_table_insurance_car_fire_3') == 'Yes') {
            $data['car_table_insurance_car_fire_3'] = 'Yes';
        } else {
            $data['car_table_insurance_car_fire_3'] = 'No';
        }

        if($request->input('car_table_insurance_car_crash_1') == 'Yes') {
            $data['car_table_insurance_car_crash_1'] = 'Yes';
        } else {
            $data['car_table_insurance_car_crash_1'] = 'No';
        }

        if($request->input('car_table_insurance_car_crash_2p') == 'Yes') {
            $data['car_table_insurance_car_crash_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_car_crash_2p'] = 'No';
        }

        if($request->input('car_table_insurance_car_crash_2') == 'Yes') {
            $data['car_table_insurance_car_crash_2'] = 'Yes';
        } else {
            $data['car_table_insurance_car_crash_2'] = 'No';
        }

        if($request->input('car_table_insurance_car_crash_3p') == 'Yes') {
            $data['car_table_insurance_car_crash_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_car_crash_3p'] = 'No';
        }

        if($request->input('car_table_insurance_car_crash_3') == 'Yes') {
            $data['car_table_insurance_car_crash_3'] = 'Yes';
        } else {
            $data['car_table_insurance_car_crash_3'] = 'No';
        }

        if($request->input('car_table_insurance_special_fire_1') == 'Yes') {
            $data['car_table_insurance_special_fire_1'] = 'Yes';
        } else {
            $data['car_table_insurance_special_fire_1'] = 'No';
        }

        if($request->input('car_table_insurance_special_fire_2p') == 'Yes') {
            $data['car_table_insurance_special_fire_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_special_fire_2p'] = 'No';
        }

        if($request->input('car_table_insurance_special_fire_2') == 'Yes') {
            $data['car_table_insurance_special_fire_2'] = 'Yes';
        } else {
            $data['car_table_insurance_special_fire_2'] = 'No';
        }

        if($request->input('car_table_insurance_special_fire_3p') == 'Yes') {
            $data['car_table_insurance_special_fire_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_special_fire_3p'] = 'No';
        }

        if($request->input('car_table_insurance_special_fire_3') == 'Yes') {
            $data['car_table_insurance_special_fire_3'] = 'Yes';
        } else {
            $data['car_table_insurance_special_fire_3'] = 'No';
        }

        if($request->input('car_table_insurance_special_crash_1') == 'Yes') {
            $data['car_table_insurance_special_crash_1'] = 'Yes';
        } else {
            $data['car_table_insurance_special_crash_1'] = 'No';
        }

        if($request->input('car_table_insurance_special_crash_2p') == 'Yes') {
            $data['car_table_insurance_special_crash_2p'] = 'Yes';
        } else {
            $data['car_table_insurance_special_crash_2p'] = 'No';
        }

        if($request->input('car_table_insurance_special_crash_2') == 'Yes') {
            $data['car_table_insurance_special_crash_2'] = 'Yes';
        } else {
            $data['car_table_insurance_special_crash_2'] = 'No';
        }

        if($request->input('car_table_insurance_special_crash_3p') == 'Yes') {
            $data['car_table_insurance_special_crash_3p'] = 'Yes';
        } else {
            $data['car_table_insurance_special_crash_3p'] = 'No';
        }

        if($request->input('car_table_insurance_special_crash_3') == 'Yes') {
            $data['car_table_insurance_special_crash_3'] = 'Yes';
        } else {
            $data['car_table_insurance_special_crash_3'] = 'No';
        }

        // if($request->hasFile('car_table_insurance_image')) {

        //     $image = $request->file('car_table_insurance_image');
        //     // $filename = $image->getClientOriginalName();

        //     $filename = date('YmdHis').'.png';
        
        //     $image_resize = Image::make($image->getRealPath());              
        //     $image_resize->resize(91, 68);
        //     $image_resize->save(public_path('uploads/car_table_insurance/'.$filename));

        //     $data['car_table_insurance_image'] = $filename;
        // }

        // if($request->input('car_table_insurance_id') != '') {
            // update
            DB::table('car_table_insurance')
                ->where('car_table_insurance_id', 1)
                ->update($data);
        // } else {
        //     // insert
        //     $data['car_table_insurance_datetime_create'] = date('Y-m-d H:i:s');

        //     DB::table('car_table_insurance')->insert($data);
        // }
        return redirect('backend/car_table_insurance/');
    }
    // end car_table_insurance

    // quotation_car
    public function quotation_car(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.quotation_car.list');
    }

    public function quotation_carServerProcessing() {
        $query = DB::table('quotation_car')
            ->join('insurance_car', 'quotation_car.insurance_car_id', '=', 'insurance_car.insurance_car_id')
            ->select('insurance_car.insurance_car_name', 'quotation_car.quotation_car_id', 'quotation_car_name_surname', 'quotation_car_telephone', 'quotation_car_email', 'quotation_car_datetime_create')
            ->orderBy('quotation_car.quotation_car_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/quotation_car/'.$r->quotation_car_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/quotation_car/form/".$r->quotation_car_id).'">Edit</a> / <a href="'.url("backend/quotation_car/quotation_car_delete/".$r->quotation_car_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // End quotation_car

    // car_contact_confirm
    public function car_contact_confirm(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.car_contact_confirm.list');
    }

    public function car_contact_confirmServerProcessing() {
        $query = DB::table('car_contact_confirm')
            ->join('insurance_car', 'car_contact_confirm.insurance_car_id', '=', 'insurance_car.insurance_car_id')
            ->select('insurance_car.insurance_car_name', 'car_contact_confirm.car_contact_confirm_id', 'car_contact_confirm_name_surname', 'car_contact_confirm_telephone', 'car_contact_confirm_email', 'car_contact_confirm_datetime_create', 'car_contact_confirm_call')
            ->orderBy('car_contact_confirm.car_contact_confirm_id', 'asc');
        
        return \DataTables::of($query)
        //     ->addColumn('image', function($r) {
        //         return '<img src="'.asset('public/uploads/car_contact_confirm/'.$r->car_contact_confirm_image).'" width="150">';
        //     })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/car_contact_confirm/form/".$r->car_contact_confirm_id).'">Edit</a> / <a href="'.url("backend/car_contact_confirm/car_contact_confirm_delete/".$r->car_contact_confirm_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['action'])->make(true);
    }
    // End car_contact_confirm
}