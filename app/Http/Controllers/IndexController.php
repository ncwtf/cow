<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    // 首页
    public function index()
    {
        $cows = DB::table('cow')->get();
        return view('index', ['cows' => $cows]);
    }

    // 保存 add or update
    public function save(Request $request) {

        $id = $request->input('id');
        $name = $request->input('name');
        $sex = $request->input('sex');
        $age = $request->input('age');
        $color = $request->input('color');
        $hobby = $request->input('hobby');

        if ($id != null) {
            // update
            DB::update('update cow set name = ?, sex = ?, age = ?, color = ?, hobby = ? where id = ?',
                [$name, $sex, $age, $color, $hobby, $id]);
        } else {
            // add
            DB::insert('insert into cow (name, sex, age, color, hobby) values (?, ?, ?, ?, ?)',
                [$name, $sex, $age, $color, $hobby]);
        }
        return redirect()->action('IndexController@index');
    }

    // 删除
    public function delete(Request $request) {

        $id = $request->input('id');
        DB::delete('delete from cow where id = ?', [$id]);
        return redirect()->action('IndexController@index');
    }
}
