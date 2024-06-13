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
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('project_code')->default(0);
            $table->string('project_name');
            $table->longText('project_summary')->nullable();
            $table->unsignedInteger('project_admin')->nullable()->index();
            $table->string('start_date')->nullable();
            $table->string('deadline')->nullable();
            $table->longText('notes')->nullable();
            $table->unsignedInteger('department')->nullable();
            $table->unsignedInteger('team_id')->nullable()->index();
            $table->mediumText('feedback')->nullable();
            $table->enum('manual_timelog', ['enable', 'disable'])->default('disable');
            $table->enum('client_view_task', ['enable', 'disable'])->default('disable');
            $table->enum('allow_client_notification', ['enable', 'disable'])->default('disable');
            $table->tinyInteger('completion_percent')->default(0);
            $table->enum('calculate_task_progress', ['true', 'false'])->default('true');
            $table->string('project_budget')->nullable();
            $table->string('hours_allocated')->nullable();
            // $table->enum('status', ['not started', 'in progress', 'on hold', 'canceled', 'finished', 'under review'])->default('in progress');
            $table->integer('status')->default(0);
            $table->unsignedInteger('added_by')->nullable()->index();
            $table->unsignedInteger('last_updated_by')->nullable()->index();
            $table->foreign('added_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('last_updated_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('project_admin')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('team_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
            $table->text('hash')->nullable();
            $table->boolean('public')->default(0);
            $table->timestamps();
            $table->softDeletes()->index();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
