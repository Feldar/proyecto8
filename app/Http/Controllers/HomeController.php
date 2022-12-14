<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller {
    // Get Home View:
    public function getHome() {
        return view('home');
    }
}
