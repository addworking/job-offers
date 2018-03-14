<?php

namespace Addworking\JobOffers;

use Illuminate\Http\Request;

class LaravelDeveloper extends JobOffer
{
    use Concerns\IsAwesome, Concerns\IsStartup, Concerns\IsDisruptive;

    protected $fillable = [
        'firstname', 'lastname', 'email',
    ];

    public function getLocationAttribute()
    {
        return "Paris 75019, Incubateur Le Cargo";
    }

    public function validate(Request $request)
    {
        return validator($request->all(), [
            'experience'  => 'numeric|between:0,6,', // in years
            'skills'      => 'array|in:php,git,bootstrap,heroku',
            'start_date'  => 'date|2018-05-01',
            'php_version' => 'numeric|min:7.2',
            'laravel'     => 'numeric|min:5.6',
        ]);
    }

    public function responsibilities()
    {
        /**
         * @todo change responsibilities as staff grows...
         */
        return collect([
            'design', 'new_features', 'bug_fixes', 'peer_reviewing', 'deployment',
        ]);
    }

    public function apply()
    {
        return redirect('https://goo.gl/forms/ffN9V2JieLwOrDib2');
    }

    public function askQuestion(string $author, string $question): bool
    {
        return mail("benjamin@addworking.com", "Question", $question, "From: {$author}");
    }

    public function __debugInfo()
    {
        return [
            'Your first task will be to choose your Nerf gun.',
        ];
    }
}
