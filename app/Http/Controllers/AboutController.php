<?php

namespace App\Http\Controllers;

use App\Exports\AboutExport;
use App\Exports\DownloadAbout;
use App\Exports\ExportAbout;
use App\Imports\ImportAbout;
use App\Models\About;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class AboutController extends Controller
{
   

    public function submit(Request $request){
        $request->validate([
            "name"=> "required",
            "email"=>"required|email",
            "mobile"=>"required|digits:10",
            "image"=>"required|mimes:png,jpg",
            "resume"=>"required|mimes:pdf",
            "dob"=>"required",
            "course"=>"required",
            "passed_out_year"=>"required",
            "company_name"=>"required",
            "from"=>"required",
            "to"=>"required",
            "project_name"=>"required",
            "project_description"=>"required",
            "project_link"=>"required",


        ]);

         $data=$request->all();
         if($request->hasFile('image')){
             $image=$request->file('image');
             $fileName=time().'_'.$image->getClientOriginalExtension();
             $destination_path=public_path('about');
             $image->move($destination_path,$fileName);
             $data['image']=$fileName;

         }
         if($request->hasFile('resume')){
             $image=$request->file('resume');
             $fileName=time().'_'.$image->getClientOriginalExtension();
             $destination_path=public_path('resume');
             $image->move($destination_path,$fileName);
             $data['resume']=$fileName;

         }
         $about=About::create($data);
         return redirect('/admin');     

    }
    public function addOrUpdate($id=null){
        if(!$id){
            $data = null;
            return view("admin.about",compact('data'));
             
        }else{
           $data=About::findOrFail($id);
           return view('admin.about',compact('data'));
        }
        
    }
    
   
    public function update(Request $request,$id){
        $data=$request->all();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=time().'_'.$image->getClientOriginalExtension();
            $destination_path=public_path('about');
            $image->move($destination_path,$fileName);
            $data['image']=$fileName;

        }
        if($request->hasFile('resume')){
            $image=$request->file('resume');
            $fileName=time().'_'.$image->getClientOriginalExtension();
            $destination_path=public_path('resume');
            $image->move($destination_path,$fileName);
            $data['resume']=$fileName;

        }
        $about = About::findOrFail($id);
        $data=$about->update($data);
        return redirect('/admin');
       
    }
    public function delete(Request $request,$id){
         About::destroy($id);
         return redirect('/admin');
    }

    public function export()
    {
        return Excel::download(new ExportAbout, 'about.xlsx');
    }
    public function download()
    {
        return Excel::download(new DownloadAbout, 'download.xlsx');
    }

    public function importView(Request $request){
        return view('importFile');
    }
    public function import(Request $request){
        Excel::import(new ImportAbout, $request->file('file')->store('files'));
        return redirect()->back();
    }
}
