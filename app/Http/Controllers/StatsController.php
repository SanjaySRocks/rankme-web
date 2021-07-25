<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Steam;
use DataTables;

class StatsController extends Controller
{
    public function dashboard()
    {
        if(!session()->get('user'))
            return redirect('login');

            
        $totalp = DB::table('rankme')->count();
        $totalhs = DB::table('rankme')->sum('head');

        return view('stats.home', compact('totalp','totalhs'));
    }

    public function funcPlayerStats(Request $request)
    {
        if(!session()->get('user'))
            return redirect('login');


        $users = DB::table('rankme')->find($request->id);

        return view('stats.player', ['users' => $users]);
    }

    public function funcPoints()
    {
        if(!session()->get('user'))
            return redirect('login');

        // $users = cache()->remember('stats-points', 600, function () {
        //     return DB::table('rankme')->orderBy('score', 'DESC')->get();
        // });
        
        return view('stats.points');
    }

    public function funcHeadshots()
    {
        if(!session()->get('user'))
            return redirect('login');


        $users = cache()->remember('stats-head', 600, function () {
            return DB::table('rankme')->orderBy('head', 'DESC')->get();
        });

        return view('stats.headshots', ['users' => $users]);
    }

    public function funcKnifes()
    {
        if(!session()->get('user'))
            return redirect('login');


        $users = cache()->remember('stats-knife', 600, function () {
            return DB::table('rankme')->orderBy('knife', 'DESC')->get();
        });

        return view('stats.knifes', ['users' => $users]);
    }

    public function funcKills()
    {
        if(!session()->get('user'))
            return redirect('login');


        $users = cache()->remember('stats-kill', 600, function () {
            return DB::table('rankme')->orderBy('kills', 'DESC')->get();
        });


        return view('stats.kills', ['users' => $users]);
    }

    public function funcMVPS()
    {
        if(!session()->get('user'))
            return redirect('login');


        $users = cache()->remember('stats-mvp', 600, function () {
            return DB::table('rankme')->orderBy('mvp', 'DESC')->get();
        });

        return view('stats.mvps', ['users' => $users]);
    }

    public function getPoints()
    {
        $query = DB::table('rankme')->select('id','steam','name','score')->orderBy('score', 'DESC');
        return DataTables::queryBuilder($query)->toJson();
    }
}
