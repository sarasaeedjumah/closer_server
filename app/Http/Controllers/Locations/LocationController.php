<?php
namespace App\Http\Controllers\Locations;
use App\Http\Controllers\Controller;
// use App\Http\Request\Location\CreateLocationRequest;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
class LocationController extends Controller
{
    protected $locat;

    public function __construct(Location $locat)
    {
        $this->locat = $locat;
    }
    public function getLocations(){

        $locat = User::select('x_lacation', 'y_lacation')->get();
        // ->where('client_id', '=', 7)
        // ->paginate(100);
        return response()->json($locat);
    }

}
