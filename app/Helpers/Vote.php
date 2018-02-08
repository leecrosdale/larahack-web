<?php
/**
 * Created by PhpStorm.
 * User: accou
 * Date: 03/02/2018
 * Time: 11:42
 */

namespace App\Helpers;


use App\User;

class Vote
{

    public static function sortVotes(User $user) {

        $votes = $user->votes()->get();

        $sorted = [];

        foreach ($votes as $vote) {
            $sorted[$vote->vote_type] = 1;
        }

        return $sorted;

    }


}
