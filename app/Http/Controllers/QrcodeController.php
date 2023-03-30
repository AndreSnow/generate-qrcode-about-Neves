<?php

namespace App\Http\Controllers;

use App\Models\Profile;

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

class QrcodeController extends Controller
{
    public function __construct()
    {
        $this->profile = new Profile();
    }

    public function scanQrcode()
    {
        $this->createQrcode();

        $profile = $this->profile->getProfile();
        return view('/scanqrcode', compact('profile'));
    }

    public function createQrcode(): void
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );
        $name = $this->profile->getProfile()->name_qr;
        $writer = new Writer($renderer);
        $writer->writeFile(
            url('/profile'),
            storage_path('app/public/qrcodes/' . $name . '.png')
        );
    }
}
