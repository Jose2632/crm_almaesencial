<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;

class Whatsapp extends Controller
{
    public function sendMessage() 
    {
        $ip = $this->getRealIP();

        $database = public_path('src/GeoLite2-Country.mmdb');

        $reader = new Reader($database);

        try {

            $record = $reader->country($ip);
            $countryName = $record->country->name;
            return redirect("https://api.whatsapp.com/send?phone=+527226795093&text=Saludos!,%20escribo%20desde%20 $countryName,%20%20me%20interesan%20sus%20servicios!.");
        } catch (Exception $e) {
            return redirect("https://api.whatsapp.com/send?phone=+527226795093&text=Saludos!,%20me%20interesan%20sus%20servicios!.");
        }
    }

 
    public function getRealIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $ip = filter_var($ip, FILTER_VALIDATE_IP);
        $ip = ($ip === false) ? '0.0.0.0' : $ip;
        return $ip;
    }
}
