<?php

namespace App\Repositories;

use App\Thing;
use DB;

class NavMenuRepository
{

    public function thing()
    {
        $getVarForShareWithAllViews = Thing::where('name','something')->firstOrFail();
        return $getVarForShareWithAllViews;
    }

    public function somethingElseForMyDatabase()
    {
        $getSomethingToMyViews = DB::table('profiles')->select('user_id', 'fname', 'lname', 'body')->get();

        return $getSomethingToMyViews;
    }

}