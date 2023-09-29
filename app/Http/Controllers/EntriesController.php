<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EntriesController extends Controller
{
    public function edit(Request $request): Response
    {
        return Inertia::render('Entries/Edit');
    }
}
