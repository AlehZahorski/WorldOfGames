<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MainPage extends Controller
{
    public function __invoke()
    {
        DB::table('genres')->truncate();
        DB::table('genres')->insert([
            'name' => 'RPG',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        return view('home.main');
    }
}
