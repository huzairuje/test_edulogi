<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestAnagramRequest;
use App\Http\Requests\TestPalindromRequest;

class TestController extends Controller
{
    /**
     * check Palindrom string using strrev() function php
     * @param TestPalindromRequest $request
     * @return string
     */
    public function palindrom(TestPalindromRequest $request)
    {
        $reverse = strrev($request->palindrom);
        if ($request->palindrom != $reverse) {
            return "false";
        }
        return "true";

    }

    /**
     * check anagram string with count_chars
     * @param TestAnagramRequest $request
     * @return string
     */
    public function anagram(TestAnagramRequest $request)
    {
        {
            if (count_chars($request->anagram_1, 1) != count_chars($request->anagram_2, 1))
                return "false";
        }
        return "true";

    }
}
