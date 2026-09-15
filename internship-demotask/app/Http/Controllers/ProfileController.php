<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Profile', [
            'profile' => [
                'name' => 'Demo User',
                'email' => 'demo@npontu.com',
                'role' => 'Intern',
            ],
            'activities' => [
                ['id' => 1, 'description' => 'Updated profile settings'],
                ['id' => 2, 'description' => 'Viewed dashboard report'],
                ['id' => 3, 'description' => 'Logged in from new device'],
            ],
        ]);
    }
}
