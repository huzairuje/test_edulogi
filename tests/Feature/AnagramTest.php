<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnagramTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWord1()
    {
        $data =  [
            'anagram_1' => 'katak',
            'anagram_2' => 'katak'
        ];

        $response = $this->post('/api/check-anagram', $data);

        $response->assertSee("true");
    }

    public function testWord2()
    {
        $data =  [
            'anagram_1' => 'kayaking',
            'anagram_2' => 'kingkaya'
        ];

        $response = $this->post('/api/check-anagram', $data);

        $response->assertSee("true");
    }

    public function testWord3()
    {
        $data =  [
            'anagram_1' => 'funeral',
            'anagram_2' => 'realfun'
        ];

        $response = $this->post('/api/check-anagram', $data);

        $response->assertSee("true");
    }

    public function testWord4()
    {
        $data =  [
            'anagram_1' => 'manusia',
            'anagram_2' => 'hewania'
        ];

        $response = $this->post('/api/check-anagram', $data);

        $response->assertSee("false");
    }

    public function testWord5()
    {
        $data =  [
            'anagram_1' => 'kucing',
            'anagram_2' => 'anjing'
        ];

        $response = $this->post('/api/check-anagram', $data);

        $response->assertSee("false");
    }

}
