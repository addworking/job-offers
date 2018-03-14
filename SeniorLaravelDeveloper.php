<?php

namespace Addworking\JobOffers;

use Illuminate\Http\Request;

class SeniorLaravelDeveloper extends LaravelDeveloper
{
    use Concerns\HasResponsibilities;

    public function validate(Request $request)
    {
        return validator($request->all(), [
            'experience'  => 'numeric|min:7,', // in years
            'skills'      => 'array|in:php,git,bootstrap,heroku,scrum',
            'start_date'  => 'date|2018-05-01',
            'php_version' => 'numeric|min:7.2',
            'laravel'     => 'numeric|min:5.6',
        ]);
    }

    public function responsibilities()
    {
        return parent::responsibilities()->merge([
            'team_building', 'team_training',
        ]);
    }
}
