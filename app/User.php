<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2023-05-07 01:07:13              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 namespace App; use Illuminate\Contracts\Auth\MustVerifyEmail; use Illuminate\Foundation\Auth\User as Authenticatable; use Illuminate\Notifications\Notifiable; class User extends Authenticatable { use Notifiable; protected $fillable = array("\165\163\145\162\x6e\141\155\x65", "\x65\x6d\x61\x69\x6c", "\x70\x61\163\x73\167\157\162\x64", "\x62\x61\143\x6b\147\x72\x6f\x75\156\144\137\x63\157\154\157\x72", "\164\145\x78\x74\x5f\143\157\x6c\x6f\162"); protected $hidden = array("\160\141\163\x73\167\x6f\x72\144", "\x72\145\x6d\145\155\142\x65\x72\137\164\157\x6b\145\156"); public function links() { return $this->hasMany(Link::class); } public function visits() { return $this->hasManyThrough(Visit::class, Link::class); } public function getRouteKeyName() { return "\x75\163\145\162\x6e\x61\x6d\145"; } }