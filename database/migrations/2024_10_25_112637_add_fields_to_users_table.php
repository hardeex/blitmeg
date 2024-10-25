<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('google_id')->nullable()->unique(); // Google ID
            $table->string('provider')->nullable(); // Provider
            $table->string('profile_picture')->nullable(); // Profile picture URL
            $table->boolean('is_active')->default(true); // Active flag
            $table->timestamp('last_login_at')->nullable(); // Last login timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['google_id', 'provider', 'profile_picture', 'is_active', 'last_login_at']);
        });
    }
}
