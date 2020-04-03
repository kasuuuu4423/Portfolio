<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Work;

class WorkController extends Controller{
    public function index(){
        $works = Work::all()->sortByDESC('id');
        return view('work/index', ['works' => $works]);
    }
    public function create(){
        if(Auth::check()){
                return view('work/create');
        }
        else{
            return view('auth/login');
        }
    }
    public function manage(){
        if(Auth::check()){
            $works = Work::all();
                return view('work/manage', ['works' => $works]);
            }
        else{
            return view('auth/login');
        }	
    }
    public function update(Request $request){
        if ($request->isMethod('POST')) {
            $img = null;
            if($request->file('image') != null){
                $path = $request->file('image')->store('img');
                $img = basename($path);
            }
            $work = Work::where('slug', $request->slug)->first();
            $work->slug = $request->slug;
            $work->name = $request->name;
            $work->period = $request->period;
            $work->link = $request->link;
            $work->description = $request->description;
            $work->technique = $request->technique;
            $work->url = $request->url;
            $work->img = $img;
            $work->save();
            return view('work/conplete', ['msg' => '更新しました']);
        }
    }
    public function edit(){
        $works = Work::all();
        return view('work/edit', ['works' => $works]);
    }
    public function destroy(Request $request){
        if ($request->isMethod('POST')) {
            $work = Work::where('slug', $request->slug)->first();
            $work->delete();
            return view('work/conplete', ['msg' => '削除しました']);
        }
    }
    public function delete(){
        return view('work/delete');
    }
    public function store(Request $request){
        if ($request->isMethod('POST')) {
            $path = $request->file('image')->store('img');

            $slug = $request->input('slug');
            $name = $request->input('name');
            $cat = $request->input('cat');
            $period = $request->input('period');
            $link = $request->input('link');
            $description = $request->input('description');
            $tech = $request->input('technique');
            $url = $request->input('url');
            $img = basename($path);

            $flag_exist = false;
            $count_slug = Work::where('slug', $slug)->count();
            if($count_slug == 0){
                $work = new Work();
                $work->create([
                    'slug' => $slug,
                    'name' => $name,
                    'cat' => $cat,
                    'period' => $period,
                    'link' => $link,
                    'description' => $description,
                    'technique' => $tech,
                    'url' => $url,
                    'img' => $img,
                ]);
                return view('work/conplete', ['msg' => '登録しました']);
            }
            else{
                return view('work/conplete', ['msg' => 'すでに登録されている作品です']);
            }
        }
    }
    public function ajax(Request $request){
        $work = Work::where('slug', $request->slug)->first();
        return view('work/ajax', ['work' => $work]);
    }
}
