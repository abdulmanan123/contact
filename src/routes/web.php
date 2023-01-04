
<?php

use Abdulmanan123\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, 'index']);