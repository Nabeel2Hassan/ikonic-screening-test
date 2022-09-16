<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function calculateTestScore($tests, $results)
    {
        $groups = array();
        for ($i = 0; $i < count($tests); $i++) {
            if (strpos($tests[$i], $i + 1)) {
            }
        }
    }

    public function getScores()
    {
        $tests = ['test1a', 'test2', 'test1b', 'test1c', 'test3'];
        $results = ['Wrong answer', 'OK', 'Runtime error', 'OK', 'Time limit exceeded'];
        $result = $this->calculateTestScore($tests, $results);
        return response()->json($result);
    }

    public function calculateNoOfContiguousFragments($numbers_array, $s)
    {
        $noOfContiguousFragments = 0;
        for ($i = 0; $i < count($numbers_array); $i++) {
            for ($j = $i; $j < count($numbers_array); $j++) {
                for ($k = $i; $k <= $j; $k++) {
                    $sum = array_sum($numbers_array[$k]);
                    if($sum / count($numbers_array) == $s) {
                        $noOfContiguousFragments++;
                    }
                }
            }
        }
    }

    public function getNoOfContiguousFragments()
    {
        $numbers_array = [2, 1, 3];
        $s = 2;
        $result = $this->calculateTestScore($numbers_array, $s);
        return response()->json($result);
    }
}
