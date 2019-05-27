<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PalindromTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testKatak()
    {
        $data =  ['palindrom' => 'katak'];

        $response = $this->post('/api/check-palindrom', $data);

        $response->assertSee("true");
    }

    public function testLevel()
    {
        $data =  ['palindrom' => 'level'];

        $response = $this->post('/api/check-palindrom', $data);

        $response->assertSee("true");
    }

    public function testKayak()
    {
        $data =  ['palindrom' => 'kayak'];

        $response = $this->post('/api/check-palindrom', $data);

        $response->assertSee("true");
    }

    public function testRandomWords()
    {
        $data =  ['palindrom' => 'Asssssallllasd'];

        $response = $this->post('/api/check-palindrom', $data);

        $response->assertSee("false");
    }

    public function testRandomWordsSecond()
    {
        $data =  ['palindrom' => 'cobaaaaajaduluuu'];

        $response = $this->post('/api/check-palindrom', $data);

        $response->assertSee("false");
    }

}
