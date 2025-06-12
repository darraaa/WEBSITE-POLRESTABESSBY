<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonilController extends Controller
{
    public function index()
    {
        return view('personil'); // Mengarahkan ke personil.blade.php
    }
}
