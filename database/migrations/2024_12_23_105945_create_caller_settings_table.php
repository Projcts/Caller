<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('caller_settings', function (Blueprint $table) {
            $table->id();
            $table->string('websocket_server_tls');
            $table->integer('websocket_port');
            $table->string('websocket_path');
            $table->string('sip_full_name');
            $table->string('sip_domain');
            $table->string('sip_username');
            $table->string('sip_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caller_settings');
    }
};
