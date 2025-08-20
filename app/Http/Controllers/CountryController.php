<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
public function show(Country $country)
{
    $posts = $country->posts()
        ->with(['user', 'tags', 'country'])
        ->paginate(5); // <- get() ki jagah paginate()

    return view('countries.show', compact('country', 'posts'));
}

}
