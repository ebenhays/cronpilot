<?php

use App\Models\Server;
use App\Models\ServerCredential;
use App\Models\Tenant;
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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tenant::class);
            $table->foreignIdFor(Server::class)->nullable();
            $table->foreignIdFor(ServerCredential::class)->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('status');
            $table->text('schedule')->nullable();
            $table->text('command')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
