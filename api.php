<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorDataController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API لاستقبال الداتا من عمر  بال POST
Route::post('/receive-sensor-data', [SensorDataController::class, 'receiveSensorData']);

// API لإرسال الداتا إلى احمد بال
Route::get('/send-sensor-data', [SensorDataController::class, 'sendDataToAI']);
