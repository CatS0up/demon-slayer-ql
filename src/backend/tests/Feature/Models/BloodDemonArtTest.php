<?php

namespace Tests\Feature\Models;

use App\Models\BloodDemonArt;
use App\Models\Character\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BloodDemonArtTest extends TestCase
{
    use RefreshDatabase;

    private BloodDemonArt $modelUnderTest;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = BloodDemonArt::factory()->create();
    }

    public function testShouldReturnSingleBloodDemonArtDemonModel(): void
    {
        // Given
        $demon = Character::factory()->create();

        $this->modelUnderTest->demon()->associate($demon)->save();

        // When
        $actual = $this->modelUnderTest->demon()->first();

        // Then
        $this->assertEquals($demon->_id, $actual->_id);
    }
}
