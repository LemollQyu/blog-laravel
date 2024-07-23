<?php

namespace App\Http\Controllers;
use App\Models\Baby;

class BabyController extends Controller {
    public function baby () {
            return view('baby',
                [
                    "test" => Baby::all()
                ]
            );
        }
    
}