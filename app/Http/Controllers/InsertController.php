<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertController extends Controller
{
    public function insert(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $date = $request->input('date');
        if (isset($title) && isset($content) && isset($date)) {
            DB::table('posts')->insert(
                ['title' => $title, 'content' => $content, 'date' => $date, 'created_at' => date(DATE_RSS), 'updated_at' => date(DATE_RSS)]);
            echo "Record inserted successfully.<br/>";
        } else {
            echo "Record inserted unsuccessfully.<br/>";
        }
        echo '<a href = "/insert">Click Here</a> to go back.<br>';

        echo '<a href = "/">Click Here</a> to go home page.';
    }
}
