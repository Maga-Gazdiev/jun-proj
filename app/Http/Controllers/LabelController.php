<?php

namespace App\Http\Controllers;

use App\Models\Label;
use Illuminate\Http\Request;

class LabelController extends Controller
{
    public function index()
    {
        $labels = new Label();
        $labels = $labels->all();
        if (empty($labels)) {
            return view('labels.index');
        }
        return view('labels.index', compact('labels'));
    }

    public function destroy(string $id)
    {
        $labels = Label::findOrFail($id);

        if (!empty($labels)) {
            flash('Не удалось удалить метку')->error();
            return redirect()->route('labels.index');
        } else {      
            $labels->delete();
            flash('Метка успешно удалена')->success();
        }
        return redirect()->route('labels.index');
    }

    public function create()
    {
        return view('labels.create');
    }

    public function store(Request $request)
    {
        $labels = new Label();
        $labels->fill($request->all());
        $labels->save();
        return redirect()->route('labels.index');
    }

    public function edit(string $id)
    {
        $labels = Label::findOrFail($id);
        return view('labels.edit', compact('labels'));
    }

    public function update(Request $request, string $id)
    {
        $labels = Label::findOrFail($id);

        $labels->fill($request->all());
        $labels->save();
        return redirect()->route('labels.index');
    }
}
