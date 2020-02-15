<?php

namespace App\Http\Controllers\Admin;

use App\Models\Locale;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LocaleRequest;

class LocalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

	public function index()
	{
		$locales = Locale::paginate();
		return view('admin.locales.index', compact('locales'));
	}

    public function show(Locale $locale)
    {
        return view('admin.locales.show', compact('locale'));
    }

	public function create(Locale $locale)
	{
		return view('admin.locales.create_and_edit', compact('locale'));
	}

	public function store(LocaleRequest $request)
	{
		$locale = Locale::create($request->all());
		return redirect()->route('admin.locales.show', $locale->id)->with('message', 'Created successfully.');
	}

	public function edit(Locale $locale)
	{
        $this->authorize('update', $locale);
		return view('admin.locales.create_and_edit', compact('locale'));
	}

	public function update(LocaleRequest $request, Locale $locale)
	{
		$this->authorize('update', $locale);
		$locale->update($request->all());

		return redirect()->route('admin.locales.show', $locale->id)->with('message', 'Updated successfully.');
	}

	public function destroy(Locale $locale)
	{
		$this->authorize('destroy', $locale);
		$locale->delete();

		return redirect()->route('admin.locales.index')->with('message', 'Deleted successfully.');
	}
}
