<?php

use App\Models\Books;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author');
            $table->string('title');
            $table->integer('pieces');
            $table->timestamps();
        });

        Books::create(['author' => 'Petőfi Sándor',
                    'title' => 'Kis vuk',
                    'pieces' => 25
        ]);

        Books::create(['author' => 'George Lucas',
                    'title' => 'Star wars',
                    'pieces' => 40
        ]);

        Books::create(['author' => 'Csolti Péter',
                    'title' => 'Java a mindennapokban',
                    'pieces' => 2
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
