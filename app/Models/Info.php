<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = "appinfo";

    public static function data()
    {

        return request()->validate(
            [
                "name" => "bail|required|string",
                "phone" => "bail|string|required:unique:appinfo",
                "phone_alt" => "",
                "email" => "bail|required|string|unique:appinfo",
                "about" => "bail|required|string",
                "privacy_policy" => "bail|required|string",
                "logo" => "string|required|bail",
                "developed_by" => "",
                "version" => "bail|required|string",
                "address" => "bail|required|string",
            ]
        );
    }
}
