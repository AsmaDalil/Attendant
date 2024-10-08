<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('students')
         ->where('family_name', 'like', '%'.$query.'%')
         ->orWhere('middle_name', 'like', '%'.$query.'%')
         ->orWhere('given_name', 'like', '%'.$query.'%')
         ->orWhere('gender', 'like', '%'.$query.'%')
         ->orWhere('id_card_num', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('students')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->family_name.'</td>
         <td>'.$row->middle_name.'</td>
         <td>'.$row->given_name.'</td>
         <td>'.$row->gender.'</td>
         <td>'.$row->id_card_num.'</td>
         <td>'.$row->id.'</td>

 
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}