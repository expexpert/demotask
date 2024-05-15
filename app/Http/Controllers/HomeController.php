<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function submit_request(Request $request)
{
   $selectedOption = $request->option1;
$selectedValues = $request->option2;

return view('home')->with([
    'selectedValues' => $selectedValues,
    'selectedOption' => $selectedOption
]);
}

}
