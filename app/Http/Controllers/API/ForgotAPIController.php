<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\Http\Controllers\AppBaseController;
use Response;



class ForgotAPIController extends AppBaseController
{
   function forgot(Request $request){
        echo json_encode($request);
   }


}
