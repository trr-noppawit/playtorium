<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request,[
        'email' => 'required' ,
        'pwd' => 'required'
        ] );

      $users= DB::select('select password from id where username = ? ' , [$request->input('email')]  );
      if( count($users) == 0 || $users[0]->password != $request->input('pwd') )
        echo 'incorrect';
      else return view('/timesheet');
    }

    public function export(){
        Excel::create('timesheet' , function ($excel) {
            $excel -> sheet('sheet' , function($sheet){
                $sheet ->fromArray(array(
                  array ('data1' , 'data2','dataaaaaaaaaaaa'),
                  array ('data3' , 'data4'),
            ) , NULL , 'A1',false,false  );
          });
        }) -> export('xls');
    }

}
