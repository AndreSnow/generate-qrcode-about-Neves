<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class QrcodeController extends Controller
{
    protected $profile;

    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function scanQrcode()
    {
        $profile = $this->profile->getProfile();
        if (is_null($profile)) {
            return redirect('/');
        }
        return view('/scanqrcode', compact('profile'));
    }
}
