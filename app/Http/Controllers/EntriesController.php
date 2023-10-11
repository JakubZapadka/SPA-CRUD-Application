<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntriesStoreRequest;
use App\Models\Entry;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EntriesController extends Controller
{
    public function index(): Response
    {
        #$entries = Entry::all(); // Fetch all entries from the database
        #return Inertia::render('Entries/Index', ['entries' => $entries]);
        return Inertia::render('Entries/Index');
    }

    public function store(EntriesStoreRequest $request)
    {
        Entry::create($request->validated());
        sleep(1);

        return to_route('entries.index');
    }

    public function show()
    {
        $entries = Entry::all();
        //return Inertia::render('Entries/Index', ['entries' => $entries]);
        return inertia('Entries/show', ['entries' => $entries]);
    }
}
