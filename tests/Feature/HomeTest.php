<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * 200번 스테이터스 반환되었는지 테스트
     * @return void
     */
    public function testStatusCode()
    {
        $response = $this->get ('/home');
        $response->assertStatus(200);
    }

    /**
     * 반환값에 안녕하세요!!!! 가 포함 되었는지 확인
     * @return void
     */
    public function testBody()
    {
        $response = $this->get ('/home');
        $response->assertSeeText("안녕하세요!!!!");
    }
}
