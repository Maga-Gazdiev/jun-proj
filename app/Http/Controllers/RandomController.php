<?php

namespace App\Http\Controllers;

use App\Models\random;
use Illuminate\Http\Request;
use App\Console\Plan;
use Illuminate\Console\Scheduling\Schedule;

class RandomController extends Controller
{
    public function generate(Request $request)
    {
        $path = 'db.sqlite';
        $db = new random();
        $rand = ["rand" => rand()];
        file_put_contents($path, $rand);
        $db->save($rand);

        if (filectime($path) < (time() - 86400)) { 
            file_put_contents($path, '');
            mail('admin@admin.admin', $path, "break");
        }
       // $schedule = new Schedule();
       // $ran = new Plan();
        //$ran->plan($schedule);

        return view('welcome', compact('rand'));
    }

    public function retrieve($id)
    {
        $db = new random();
        $id = $db::findOrFail($id);

        if (is_null($id)) {
            return 'Number not found';
        }

        return view('welcome', compact('id'));
    }
}