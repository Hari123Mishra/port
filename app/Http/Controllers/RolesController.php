<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index($id=null){
        if($id===null){
            $data=Role::get();
            return view(
                'admin.permission.roles.index',
                compact('data')
            );
        }else{
            $data=Role::findOrFail($id);
            return response()->json(['message'=>'Successfully creaed all data','status'=>'success','data'=>$data]);

        }
       
    }
    public function submit(Request $request,$id=null){
       if($id=='null'){
        $data=Role::create(["name"=>$request->name]);
        return response()->json(['message'=>'Successfully created all data','status'=>'success','data'=>$data]);
       }else{
        $updateData= Role::where('id',$request->id)->update(["name"=>$request->name]);
        $data=Role::where('id',$request->id)->first();
        return response()->json(['message'=>'Successfully updated all data','status'=>'success','data'=>$data]);
       }
      
    }

    public function delete(Request $request){
        $data=Role::where('id',$request->id)->delete();
        return response()->json(['message'=>'Successfully deleted successfully','status'=>'success','data'=>$data]);
    }
    
}
