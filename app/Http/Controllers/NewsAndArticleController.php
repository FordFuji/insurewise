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

class NewsAndArticleController extends Controller implements HasImagesContract
{
    use HasImages;

    // news_and_article
    public function news_and_article(Request $request) {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        return view('backend.news_and_article.list');
    }

    public function news_and_articleServerProcessing() {
        $query = DB::table('news_and_article')
            ->orderBy('news_and_article.news_and_article_id', 'asc');
        
        return \DataTables::of($query)
            ->addColumn('news_and_article_home', function($r) {
                if($r->news_and_article_home == 'Yes') {
                    return '<input type="checkbox" id="news_and_article_home_'.$r->news_and_article_id.'" checked onclick="checkNewsAndArticle(this.value);" value="'.$r->news_and_article_id.'">';
                } else {
                    return '<input type="checkbox" id="news_and_article_home_'.$r->news_and_article_id.'" onclick="checkNewsAndArticle(this.value);" value="'.$r->news_and_article_id.'">';
                }
            })
            ->addColumn('news_and_article_image', function($r) {
                return '<img src="'.asset('public/uploads/news_and_article/'.$r->news_and_article_image).'" width="150">';
            })
            ->addColumn('action', function($r) {
                return '<a href="'.url("backend/news_and_article/form/".$r->news_and_article_id).'">Edit</a> / <a href="'.url("backend/news_and_article/news_and_article_delete/".$r->news_and_article_id).'" onclick="return confirm(\'Confirm Delete\')">Delete</a>';
            })
            ->rawColumns(['news_and_article_home', 'news_and_article_image', 'action'])->make(true);
    }

    public function news_and_article_form(Request $request, $news_and_article_id = '') {
        if(!$request->session()->has('user_id')) {
            return redirect('backend/login');
        }

        $data['row'] = DB::table('news_and_article')
            ->where('news_and_article_id', $news_and_article_id)
            ->first();

        return view('backend.news_and_article.form', $data);
    }

    public function news_and_articleSaveUpdate(Request $request) {
        // upload file
        $data = array(
            'news_and_article_news_or_article' => $request->input('news_and_article_news_or_article'),
            'news_and_article_suggest' => $request->input('news_and_article_suggest'),
            'news_and_article_topic' => $request->input('news_and_article_topic'),
            'news_and_article_description' => $request->input('news_and_article_description'),
            'news_and_article_date' => $request->input('news_and_article_date'),
            'news_and_article_detail' => $request->input('news_and_article_detail'),
            'news_and_article_datetime_update' => date('Y-m-d H:i:s')
        );

        if($request->hasFile('news_and_article_image')) {

            $image = $request->file('news_and_article_image');
            // $filename = $image->getClientOriginalName();

            $filename = date('YmdHis').'.png';
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(392, 293);
            $image_resize->save(public_path('uploads/news_and_article/'.$filename));

            $data['news_and_article_image'] = $filename;
        }

        if($request->input('news_and_article_id') != '') {
            // update
            DB::table('news_and_article')
                ->where('news_and_article_id', $request->input('news_and_article_id'))
                ->update($data);
        } else {
            // insert
            $data['news_and_article_datetime_create'] = date('Y-m-d H:i:s');

            DB::table('news_and_article')->insert($data);
        }
        return redirect('backend/news_and_article/');
    }

    public function ajaxNewsAndArticleHome(Request $request) {
        if($request->input('news_home') == 'No') {
            $data = array(
                'news_and_article_home' => 'No',
                'news_and_article_datetime_update' => date('Y-m-d H:i:s')
            );
            
            DB::table('news_and_article')
                ->where('news_and_article_id', '=', $request->input('news_and_article_id'))
                ->update($data);

        } elseif($request->input('news_home') == 'Yes') {
            $data = array(
                'news_and_article_home' => 'No'
            );

            DB::table('news_and_article')
                ->update($data);

            $data = array(
                'news_and_article_home' => 'Yes',
                'news_and_article_datetime_update' => date('Y-m-d H:i:s')
            );

            DB::table('news_and_article')
                ->where('news_and_article_id', '=', $request->input('news_and_article_id'))
                ->update($data);
        }
    }
    // end news_and_article
}