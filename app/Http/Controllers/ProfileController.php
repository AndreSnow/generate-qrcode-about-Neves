<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->profile = new Profile();
        $this->scanQr = new QrcodeController();
    }

    public function createProfile()
    {
        return view('createprofile');
    }

    public function saveData(Request $request)
    {
        $this->profile->saveData($request->only([
            'id',
            'name',
            'last_name',
            'about_me',
            'phone',
            'email',
            'linkedin',
            'github',
            'resume',
            'name_qr'
        ]));

        return $this->scanQr->scanQrcode();
    }

    public function getProfile()
    {
        $profile = $this->profile->getProfile();
        
        return view('profile', compact('profile'));
    }
}
