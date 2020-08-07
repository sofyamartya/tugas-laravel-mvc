<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProfilIdToQuestionLikesDislikes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('question_likes_dislikes', function (Blueprint $table) {
          $table->unsignedBigInteger('profil_id');
          $table->foreign('profil_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('question_likes_dislikes', function (Blueprint $table) {
          $table->dropForeign(['profil_id']);
          $table->dropColumn(['profil_id']);
        });
    }
}
