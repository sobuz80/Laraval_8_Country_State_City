Step 3 – Create Country State City Migration and Model File

php artisan make:model Country
php artisan make:model State
php artisan make:model City


php artisan make:migration create_country_state_city_tables


<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateCountryStateCityTables extends Migration
{
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('states', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('country_id');            
            $table->timestamps();
        });
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('state_id');            
            $table->timestamps();
        });
    }
   public function down()
    {
       Schema::drop('countries');
       Schema::drop('states');
       Schema::drop('cities');
    }
}

Then, run the following command on command prompt:

php artisan migrate

Step 4 – Add Routes For Country State City

	
use App\Http\Controllers\CountryStateCityController;
 
 
Route::get('country-state-city', [CountryStateCityController::class, 'index']);
Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);




php artisan make:controller CountryStateCityController
