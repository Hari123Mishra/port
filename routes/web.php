<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UserController;
use App\Models\About;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front');
});
Route::get('/about-my-self',function(){
      return view('about');
});
Route::get('/resume-my-self',function(){
    return view('resume');
});
Route::get('/services',function(){
    return view('services');
});
Route::get('/portfolio',function(){
    return view('portfolio');
});
Route::get('/contact',function(){
    return view('contact');
});

Auth::routes();

Route::middleware(['auth'])->group(function(){
    Route::get('/admin/list',function(){
        $data=About::get();
        return view('admin.about-index',compact('data'));
        });
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('/admin/about', [AboutController::class, 'submit'])->name('admin.about');
    Route::put('/admin/about/{id}', [AboutController::class, 'update'])->name('admin.update');
    Route::get('/admin/{id?}', [AboutController::class, 'addOrUpdate'])->name('admin.addOrUpdate');
    Route::get('/admin/delete/{id}', [AboutController::class, 'delete'])->name('admin.delete');
    Route::get('/export-about', [AboutController::class,'export']);
    Route::get('/import-download', [AboutController::class,'download']);
    Route::post('/import', [AboutController::class,'import']);
    Route::get('/import-view', [AboutController::class,'importView']);
    Route::get('/roles/{id?}', [RolesController::class,'index'])->name('admin.roles.index');
    Route::post('/roles/submit/{id?}', [RolesController::class,'submit'])->name('admin.roles.submit');
    Route::delete('/roles/delete', [RolesController::class,'delete'])->name('admin.roles.delete');
    Route::get('/permisssion',[PermissionController::class,'index'])->name('admin.permissions.index');
    Route::resource('user', UserController::class, [
        'names' => [
            'index' => 'user.list',
            'create' => 'user.new',
            'store' => 'user.save',
            'show' => 'user.view',
            'edit' => 'user.modify',
            'update' => 'user.change',
            'destroy' => 'user.remove'
        ]
    ]);
    
});

