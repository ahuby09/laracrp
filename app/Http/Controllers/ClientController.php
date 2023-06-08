<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Player;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    public function updatePrep(Request $request){
        return $request['id'];
        // /* get the client ID */
        // $id = $request['id'];
        // /* pull the data */
        // $clients = DB::select('select * from clients WHERE id ='. $id);
        // /* prepoluate fields known */

        // /* add rest of the fields*/
        // /* update */
        // return view('/update',['clients'=>$clients]);
    }

    public function update(Request $request){
        /* get the client ID */
        $id = $request['id'];
        /* pull the data */
        $clients = DB::select('select * from clients WHERE id ='. $id);
        /* prepoluate fields known */

        /* add rest of the fields*/
        /* update */

    }
    public function assignClient()
    {
        /* get the client id */
        /*get the user id */

        /* bring dropdown of the users then once selected add the clientID in the userClient relationship table */
    }
    public function editClient()
    {
        /* getclient ID */
        /* populate data */
        /* give the extra data forms */
        /*  Update info */
    }
}
?>
