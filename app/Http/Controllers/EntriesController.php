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
        return Inertia::render('Entries/Index');
    }

    public function store(EntriesStoreRequest $request)
    {
        Entry::create($request->validated());
        sleep(1);

        return to_route('entries.index');
    }
}
