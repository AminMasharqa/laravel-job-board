<?php

namespace App\Models;


class Job 
{
    public static function all(){
        return [
            ['title' => 'software engineer','salary'=>'$1000'],
            ['title'=> 'zez','salary'=> '$500'],
        ];
        }
}
