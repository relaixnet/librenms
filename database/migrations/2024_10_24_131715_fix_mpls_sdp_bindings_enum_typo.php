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
        DB::statement("ALTER TABLE mpls_sdp_binds MODIFY sdpBindVcType ENUM('undef', 'ether', 'vlan', 'mirror', 'atmSdu', 'atmCell', 'atmVcc', 'atmVpc', 'frDlci', 'ipipe', 'satopE1', 'satopT1', 'satopE3', 'satopT3', 'cesopsn', 'cesopsnCas') NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("ALTER TABLE mpls_sdp_binds MODIFY sdpBindVcType ENUM('undef', 'ether', 'vlan', 'mirrior', 'atmSduatmCell', 'atmVcc', 'atmVpc', 'frDlci', 'ipipe', 'satopE1', 'satopT1', 'satopE3', 'satopT3', 'cesopsn', 'cesopsnCas') NULL");
    }
};
