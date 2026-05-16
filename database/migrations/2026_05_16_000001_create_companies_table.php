<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(): void { Schema::create('companies', function (Blueprint $table): void { $table->id(); $table->uuid('uuid')->unique(); $table->string('name'); $table->string('slug')->unique(); $table->string('email'); $table->string('phone')->nullable(); $table->string('address')->nullable(); $table->string('city')->nullable(); $table->string('postal_code', 20)->nullable(); $table->string('country')->default('France'); $table->string('siret')->nullable(); $table->string('tva_number')->nullable(); $table->string('logo')->nullable(); $table->string('subscription_plan')->default('trial'); $table->string('subscription_status')->default('trialing'); $table->timestamp('trial_ends_at')->nullable(); $table->timestamps(); }); } public function down(): void { Schema::dropIfExists('companies'); } };
