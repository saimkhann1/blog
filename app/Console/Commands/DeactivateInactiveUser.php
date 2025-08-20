<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class DeactivateInactiveUser extends Command
{
    protected $signature = 'users:deactivate-inactive';
    protected $description = 'Deactivate users who have not posted in the last 30 days';

    public function handle()
    {
        $date = Carbon::now()->subDays(30);

        // Sirf active users ko check karo jinhone 30 din se post nahi kiya
        $updated = User::where('status', 1)   // only active users
            ->whereDoesntHave('posts', function ($query) use ($date) {
                $query->where('created_at', '>=', $date);
            })
            ->update(['status' => 0]);  // set inactive

        $this->info("{$updated} users have been marked as inactive.");
    }
}
