<?php

namespace App\Providers;

use App\Models\Auction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-all-auctions', function (User $user) {
            return true;
        });
        Gate::define('view-auction', function (User $user) {
            return true;
        });

        Gate::define('create-auction', function (User $user) {
            return true;
        });
        Gate::define('edit-auction', function ( User $user, Auction $auction) {
                return ($auction->creator_user_id == auth()->id() || $user->role == "Editor"
                || $user->role == "Superadmin");

        });
        Gate::define('delete-auction', function ( User $user, Auction $auction) {
            return ($auction->creator_user_id == auth()->id() || $user->role == "Superadmin");
        });


    }
}
