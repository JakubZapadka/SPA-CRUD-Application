<?php

namespace App\Http\Controllers;

use App\Http\Requests\EntryStoreRequest;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class EntryController extends Controller
{
    public function index(): Response
    {
        $entries = Entry::all();
        return Inertia::render('Entries/Index', ['entries' => $entries]);
    }

    /**
     * Create new entry profile information.
     */
    public function store(EntryStoreRequest $request): RedirectResponse
    {
        Entry::create($request->validated());
        sleep(1);

        return Redirect::route('entries.index');
    }

    /**
     * Update the user's profile information.
     */
    public function update(Entry $entry, EntryStoreRequest $request)
    {
        $entry->update($request->validated());

        return Redirect::route('entries.index');
    }
}
