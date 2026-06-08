<?php

namespace App\Http\Controllers;

use App\Models\Revista;
use Illuminate\Http\Request;
use App\Http\Requests\RevistaRequest;


class RevistaController extends Controller
{
    public function index()
    {
        $revistas = Revista::all();

        return view('revistas.index', compact('revistas'));
    }

    public function create()
    {
        return view('revistas.create');
    }

    public function store(RevistaRequest $request)
    {
        Revista::create($request->all());

        return redirect('/revistas');
    }

    public function show(Revista $revista)
    {
        return view('revistas.show', compact('revista'));
    }

    public function edit(Revista $revista)
    {
        return view('revistas.edit', compact('revista'));
    }

    public function update(RevistaRequest $request, Revista $revista)
    {
        $revista->update($request->all());

        return redirect('/revistas');
    }

    public function destroy(Revista $revista)
    {
        $revista->delete();

        return redirect('/revistas');
    }
}