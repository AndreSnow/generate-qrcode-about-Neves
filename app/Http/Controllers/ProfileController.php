<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profile;
    protected $scanQr;
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
        $profileData = $request->only([
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
        ]);

        $this->profile = $this->profile->saveData($profileData);
        $this->createQrcode();
        return redirect('scan');
    }

    public function createQrcode(): void
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $writer = new Writer($renderer);

        if (!is_dir(storage_path('app/public/qrcodes'))) {
            mkdir(storage_path('app/public/qrcodes/'));
        }

        $writer->writeFile(
            url('/profile/' . $this->profile->name),
            storage_path('app/public/qrcodes/' . $this->profile->name_qr . '.png')
        );
    }

    public function getProfile()
    {
        $profile = $this->profile->getProfile();

        return view('profile', compact('profile'));
    }
}
