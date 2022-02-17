
<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
 use App\Http\Controllers\Locations\UserController;

 /***  new Middleware */
 Route::group(['middleware' => ['api', 'Userdata']],function(){
    Route::post('api_user', [ UserController::class, 'getUserlocation']);
    /** for channel public location */


});
Route::post('user_Lac', [ UserController::class, 'getUserlocation']);

Route::get('test',function(){
return " the new test ";

});
