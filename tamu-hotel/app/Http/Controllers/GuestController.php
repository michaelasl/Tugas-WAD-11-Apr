<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function index()
    {
        $guests = Guest::all(); // Ambil semua data tamu dari database
        return view('guests.index', compact('guests')); // Kirim ke view guests/index.blade.php
    }
}

