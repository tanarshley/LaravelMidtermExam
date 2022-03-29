<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        $aboutMe = array(
            'name' => 'Arshley L. Tan',
            'age' => '21',
            'address' => '#2117 Purok 9 Old Cabalan',
            'contactNumber' => '09472660546',
            'hobbies' => 'Playing video games and mobile games.',
            'facebook' => 'hatdawgph',
            'instagram' => '@arshleytan',
            'github' => 'tanarshley',
            'profilePhoto' => 'photos/myprofile.png'
        );
        return view('pages.home')->with($aboutMe);
    }

    public function education(){
        $educationPg = array(
            'title' => 'Educational Background',
            'schools' => ['Gordon College (BSIT)', 'Columban College Main (TVL-ICT)', 'OCNHS (Electronics)', 'OCES'],
            'batchYears' => ['2019 - 2023', '2017 - 2019', '2015 - 2019', '2008 - 2015']
        );

        return view('pages.education')->with($educationPg);
    }

    public function expertise(){
        $expertisePg = array(
            'title' => 'Expertise',
            'languages' => ['HTML', 'CSS', 'Angular', 'Laravel', 'JavaScript'],
            'svgs' => ['svg/html.svg', 'svg/css.svg', 'svg/angular.svg', 'svg/laravel.svg', 'svg/javascript.svg']
        );

        return view('pages.expertise')->with($expertisePg);
    }
}
