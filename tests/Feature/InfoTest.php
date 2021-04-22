<?php

namespace Tests\Feature;

use App\Models\Info;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InfoTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    /** @test */
    public function appinfo_index_should_return_ok()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('appinfo');
        $response->assertOk();
    }

    /** @test */
    public function appinfo_index_should_return_view_appinfo_index()
    {
        $this->withoutExceptionHandling();
        $response = $this->get("appinfo");
        $response->assertViewIs("models.info.index");
    }
    /** @test */
    public function app_info_index_should_return_variable_appinfo()
    {
        $this->withoutExceptionHandling();
        $response = $this->get("appinfo");
        $response->assertViewHas("appinfo");
    }
    /** @test */
    public function an_admin_can_create_appinfo()
    {
        $this->withoutExceptionHandling();
        $appinfo = Info::factory()->make()->toArray();
        $response = $this->post("appinfo", $appinfo);
        $this->assertCount(1, Info::all());

    }
}
