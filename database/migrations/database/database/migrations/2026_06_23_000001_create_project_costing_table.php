<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('project_costing', function (Blueprint $table) {
            $table->id();
            $table->string('project_name'); 
            $table->decimal('material_cost', 15, 2)->default(0.00);
            $table->decimal('labor_cost', 15, 2)->default(0.00);
            $table->decimal('equipment_cost', 15, 2)->default(0.00);
            $table->decimal('revenue_aed', 15, 2)->default(0.00);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('project_costing'); }
};

        Schema::create('manpower_management', function (Blueprint $table) {
            $table->id();
            $table->string('worker_name');
            $table->enum('deployment_type', ['Onshore', 'Offshore']); // Separate Tracking
            $table->string('certifications_permits')->nullable(); 
            $table->string('shift_schedule')->nullable(); 
            $table->string('compliance_status')->default('Valid'); 
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('manpower_management'); }
};
