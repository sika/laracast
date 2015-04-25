<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {
    
    public function contact(){
        return 'contact';
    }
    public function about(){
        $name = '<span style="color: red">Simon</span>';
        return view('pages/about')->with('name', $name);
    }
}