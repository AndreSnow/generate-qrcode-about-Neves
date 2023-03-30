<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profile extends Authenticatable
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
        'name',
        'last_name',
        'about_me',
        'email',
        'phone',
        'linkedin',
        'github',
        'resume',
        'name_qr'
    ];

    public function saveData(array $data)
    {
        return $this->create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'about_me' => $data['about_me'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'linkedin' => $data['linkedin'],
            'github' => $data['github'],
            'resume' => $data['resume'],
            'name_qr' => 'profile_' . $data['phone'] . date('Ymd') . '_qrcode',
        ]);
    }

    public function getProfile()
    {
        $data = $this->select(
            'name',
            'last_name',
            'about_me',
            'email',
            'phone',
            'linkedin',
            'github',
            'resume',
            'name_qr'
        )->latest()->first();

        return $data;
    }
}
