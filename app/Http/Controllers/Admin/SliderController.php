<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    public function create(){
        return view('admin.slider.create');
    }
    public function store(Request $request){

        $request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'title'=>'required|string',
            'description'=>'required|string',
            'site-link'=>'active_url|nullable'
        ]);
        $slider=new Slider();
        $slider->image=$request->image;
        $slider->title=$request->title;
        $slider->description=$request->description;
        $slider->slider_link=$request->slider_link;
        $slider->save();
        return redirect()->route('slider.index');
    }
    public function edit($id){
        $slider=Slider::findorFail($id);
        return view('admin.slider.edit',compact('slider'));
    }
    public function update(Request $request ,$id){
        $sliderImg=$request->validate([
            'image'=>'required|mimes:png,jpg,jpeg',
            'title'=>'required|string',
            'description'=>'required|string',
            'slider_link'=>'active_url|nullable'
        ]);
        $slider=Slider::find($id);
        $slider->update($sliderImg);
        return redirect()->route('slider.index');
    }
    public function destroy($id){
        if($id!=""){
            $slider=Slider::where('id',$id);
            $slider->delete($id);
            return redirect()->route('slider.index');
        }
    }
}
