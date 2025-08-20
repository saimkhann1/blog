<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Schedule;
>>>>>>> c17c6a8 (create new post tk)

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
<<<<<<< HEAD
=======



Schedule::command('users:deactivate-inactive')->daily();

>>>>>>> c17c6a8 (create new post tk)
