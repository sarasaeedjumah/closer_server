<?php

namespace App\Http\Controllers\Locations;
use App\Http\Controllers\Controller;/** if dont write this will be error in controller  */
use App\Classes\ResponseHelper;
use App\Events\Userlocation;
use App\Http\Requests\Location\CreateLocationRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function getUserlocation( )
    {
      $user= User::get();

      return response()->json($user);

    }
    public function getUserData(Request $request)
    {
        // $user = $request->user();
        // return ResponseHelper::select(['user' => $user]);
    }
/** not uses */
    public function getlocations( CreateLocationRequest $request)
    {

       $locate = User::select('x_location','y_location')->get();

    //    event(new Userlocation($locate));
       return $locate ;
    }

     /** return User data with pass id  */
    public function get(Request $request)
     { //getData(['x_location' => $request->user()->x_location,
    // 'y_location' => $request->user()->y_location]));
        return ResponseHelper::select($this->user->getData(['user_id' => $request->user()->id]));
    }
/** this is for insert user to database  */
    public function create(Request  $request)
    {
        $user = $request->user();
        $dataUser = $request->only($this->user->getFillable());
        $dataUser['statue'] = $request->statue;
        $createUser =$this->user->create($dataUser);
        // $createUser = $this->user->createData($dataUser);
        if(empty($createUser)){
           return "error ";
                }
                else return "success";
    }

}
