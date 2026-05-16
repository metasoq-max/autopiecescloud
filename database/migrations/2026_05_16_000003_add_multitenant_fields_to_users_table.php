<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration { public function up(): void { Schema::table('users', function (Blueprint $table): void { $table->uuid('uuid')->nullable()->after('id'); $table->foreignId('company_id')->nullable()->after('uuid')->constrained()->nullOnDelete(); $table->string('role')->default('admin'); $table->string('phone')->nullable(); $table->string('avatar')->nullable(); $table->timestamp('last_login_at')->nullable(); }); } public function down(): void { Schema::table('users', function (Blueprint $table): void { $table->dropConstrainedForeignId('company_id'); $table->dropColumn(['uuid','role','phone','avatar','last_login_at']); }); } };
