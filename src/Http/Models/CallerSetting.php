<?php

namespace Alisons\Caller\Http\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class CallerSetting extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'websocket_server_tls',
        'websocket_port',
        'websocket_path',
        'sip_full_name',
        'sip_domain',
        'sip_username',
        'sip_password',
    ];
}
