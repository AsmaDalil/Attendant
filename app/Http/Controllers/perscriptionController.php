<?php

namespace App\Http\Controllers;
use App\Models\perscription;

use Illuminate\Http\Request;

class perscriptionController extends Controller
{
    function index(){
        {
      
            $perscriptions = perscription::when($request->has("title"), function ($q) use ($request) {
                 return $q->where("title", "like", "%" . $request->get("title") . "%");
            })
    
            ->when($request->has("detail"), function ($q) use ($request) {
                return $q->where("detail", "like", "%" . $request->get("detail") . "%");
            })
    
            ->paginate(7);
    
    
        return view('perscriptions.list ', ['perscriptions' => $perscriptions]);
        }
        
    }
}

