<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Invisnik\LaravelSteamAuth\SteamAuth;
use App\Models\Steam;
use Session;


class SteamController extends Controller
{
    protected $steam;

    protected $redirectURL = '/dashboard';

    public function __construct(SteamAuth $steam)
    {
        $this->steam = $steam;
    }

    public function redirectToSteam()
    {
        return $this->steam->redirect();
    }

    public function handle()
    {
        if ($this->steam->validate()) {
            $info = $this->steam->getUserInfo();

            if (!is_null($info)) {
                $user = $this->findOrNewUser($info);
                // dd($info);

                session()->put(['user' => $user]);

                return redirect($this->redirectURL); // redirect to site
            }
        }
        return $this->redirectToSteam();
    }

    protected function findOrNewUser($info)
    {
        $user = Steam::where('steamid', $info->steamID64)->first();

        if (!is_null($user)) {
            return $user;
        }

        return Steam::create([
            'username' => $info->personaname,
            'avatar' => $info->avatarfull,
            'steamid' => $info->steamID64
        ]);
    }

    public function logout()
    {
        session()->forget('user');

        return back();
    }
}
