<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('quiz_header_id')->constrained()->onDelete('cascade');
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('question_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('answer_id')->constrained()->onDelete('cascade');
            $table->enum('is_correct', [0, 1])->default(0);
            $table->integer('score')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quizzes', function (Blueprint $table) {
            $table->dropForeign('quizzes_user_id_foreign');
            //$table->dropColumn('user_id');
            $table->dropForeign('quizzes_quiz_header_id_foreign');
          //  $table->dropColumn('quiz_header_id');
            $table->dropForeign('quizzes_section_id_foreign');
           // $table->dropColumn('section_id');
            $table->dropForeign('quizzes_question_id_foreign');
           // $table->dropColumn('question_id');
            $table->dropForeign('quizzes_answer_id_foreign');
           // $table->dropColumn('answer_id');
        });

        Schema::dropIfExists('quizzes');
    }
}
