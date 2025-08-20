<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_posts_table.php

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
<<<<<<< HEAD
            $table->foreignId('country_id')->constrained()->onDelete('cascade'); // ✅ Add this line
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
=======
            $table->foreignId('country_id')->constrained()->onDelete('cascade'); 
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->softDeletes();
>>>>>>> c17c6a8 (create new post tk)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
