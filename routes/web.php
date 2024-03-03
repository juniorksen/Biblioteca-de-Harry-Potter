    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\UserController;


      Route::get('/', [UserController::class, 'inicio'])->name('user.inicio');
        Route::get('/index', [UserController::class, 'index'])->name('user.index');
        
        Route::get('/created', [UserController::class, 'create'])->name('user.Start'); 
        Route::post('/created', [UserController::class,'store'])->name('user.store');

        Route::get('/iniciar', [UserController::class, 'iniciar'])->name('user.iniciar');
        Route::post('/iniciar',[UserController::class,'validaccion'])->name('user.validaccion');

        Route::get('/piedra', [UserController::class, 'piedra'])->name('user.piedra');
        Route::get('/camara',[UserController::class,'camara'])->name('user.camara');
        Route::get('/prisionero',[UserController::class,'prisionero'])->name('user.prisionero');
        Route::get('/caliz',[UserController::class,'caliz'])->name('user.caliz');
        Route::get('/fenix',[UserController::class,'fenix'])->name('user.fenix');
        Route::get('/principe',[UserController::class,'principe'])->name('user.principe');
        Route::get('/reliquias',[UserController::class,'reliquias'])->name('user.reliquias');


