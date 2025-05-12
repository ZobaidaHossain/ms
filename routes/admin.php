<?php

use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\backend\AboutUsController;
use App\Http\Controllers\backend\AudienceController;
use App\Http\Controllers\backend\BackgroundController;
use App\Http\Controllers\backend\BgMemoryController;
use App\Http\Controllers\backend\ContractController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ExecutiveController;
use App\Http\Controllers\backend\FounderController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\GoalController;
use App\Http\Controllers\backend\HeadingController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\SliderController;
use App\Http\Controllers\backend\TeamController;
use App\Http\Controllers\backend\SocialController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\backend\ObjectiveController;
use App\Http\Controllers\backend\NoticeController;
use App\Http\Controllers\backend\HelpController;
use App\Http\Controllers\backend\DescriptionController;
use App\Http\Controllers\backend\DonationController;
use App\Http\Controllers\backend\IntroductionController;
use App\Http\Controllers\backend\OrganizationController;
use App\Http\Controllers\backend\PhotoController;
use App\Http\Controllers\backend\SupportController;
use App\Http\Controllers\backend\ZoneController;
use App\Http\Controllers\backend\ProjectController;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['middleware' => ['auth:sanctum'],'as' => 'admin.'],  function () {



    Route::resource('/', DashboardController::class);

    Route::resource('/role', RoleController::class );

    Route::resource('/slider', SliderController::class );

    Route::resource('/about-us', AboutUsController::class );

    Route::resource('/service', ServiceController::class );

    Route::resource('/founder', FounderController::class );

    Route::resource('/background', BackgroundController::class);

    Route::resource('/bg-memory', BgMemoryController::class);
    Route::resource('/heading', HeadingController::class);


    Route::resource('/team', TeamController::class);

    Route::resource('/Site', AboutUsController::class );

    Route::resource('/gallery', GalleryController::class);

    Route::resource('/goal', GoalController::class);
    Route::resource('/social', SocialController::class);
    Route::resource('/video', VideoController::class);
    Route::resource('/executive', ExecutiveController::class);
    Route::resource('/contract', ContractController::class);
    Route::resource('/objective', ObjectiveController::class);
    Route::resource('/notice', NoticeController::class);
    Route::resource('/help', HelpController::class);
    Route::resource('/audience', AudienceController::class);
    Route::resource('/introduction', IntroductionController::class);
    Route::resource('/organization', OrganizationController::class);
    Route::resource('/photo', PhotoController::class);
    Route::resource('/support', SupportController::class);
    Route::resource('/zone', ZoneController::class);
    Route::resource('/project', ProjectController::class);
    Route::resource('/donation', DonationController::class);
});


