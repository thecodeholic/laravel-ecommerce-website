<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('company_name', 255)->nullable()->after('last_name');
            $table->string('vat_number', 255)->nullable()->after('company_name');
            $table->string('phone2', 255)->nullable()->after('phone');
            $table->string('type', 45)->nullable();
            $table->string('account_name', 255)->nullable();
            $table->string('sort_code', 255)->nullable();
            $table->string('account_number', 255)->nullable();
            $table->string('iban', 255)->nullable();
            $table->string('swift', 255)->nullable();
            $table->string('bank_name', 255)->nullable();
            $table->string('address1', 255)->nullable();
            $table->string('address2', 255)->nullable();
            $table->string('address3', 255)->nullable();
            $table->string('status', 45)->nullable();
            $table->string('personal_id', 45)->nullable();
            $table->timestamps();
            $table->foreignIdFor(User::class, 'created_by')->nullable();
            $table->foreignIdFor(User::class, 'updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
        });
    }
};
