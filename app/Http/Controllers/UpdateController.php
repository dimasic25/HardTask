<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
    public function download(Request $request)
    {
        $id = $request->input('id');
        if (isset($id)) {
            $row = DB::table('posts')->where('id', '=', $id)->first();
            if ($row !== null) {
                $id = $row->id;
                $title = $row->title;
                $content = $row->content;
                $date = $row->date;
                return view('updateDate', ['id' => $id, 'title' => $title, 'content' => $content, 'date' => $date]);
            } else echo "Такой записи нет!";
        }
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');
        $date = $request->input('date');
        if (isset($id) && isset($title) && isset($content) && isset($date)) {
            DB::table('posts')->where('id', $id)->update(
                ['title' => $title, 'content' => $content, 'date' => $date, 'updated_at' => date(DATE_RSS)]);
            echo "Record updated successfully.<br/>";
        } else {
            echo "Record updated unsuccessfully.<br/>";
        }
        echo '<a href = "/update">Click Here</a> to go back.<br>';
        echo '<a href = "/">Click Here</a> to go home page.';
    }
}
