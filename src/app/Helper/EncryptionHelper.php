<?php

namespace App\Helper;

use Illuminate\Support\Facades\Crypt;

class EncryptionHelper
{
    public static function encrypt($data)
    {
        // Gunakan APP_KEY atau KEY_ENCRYPT dari .env
        $key = env('KEY_ENCRYPT', 'defaultkey');
        return Crypt::encryptString($data, false);
    }

    public static function decrypt($encryptedData)
    {
        try {
            return Crypt::decryptString($encryptedData);
        } catch (\Exception $e) {
            return 'Decryption Failed: ' . $e->getMessage();
        }
    }
}