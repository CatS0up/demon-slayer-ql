<?php

namespace Tests\Feature\Models\Breathing;

use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use App\Models\Character\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BreathingStyleTechniqueTest extends TestCase
{
    use RefreshDatabase;

    private BreathingStyleTechnique $modelUnderTest;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = BreathingStyleTechnique::factory()->create();
    }

    public function testShouldReturnNullValueWhenITryToGetAStyleAndCurrentBreathingStyleTechniqueDoesNotHaveAssignedBreathingStyle(): void
    {
        // When
        $actual = $this->modelUnderTest->style()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnASingleStyleModel(): void
    {
        // Given
        $style = BreathingStyle::factory()->create();

        $this->modelUnderTest->style()->associate($style)->save();

        // When & Then
        $this->assertEquals($style->_id, $this->modelUnderTest->_breathingStyleId);
    }

    public function testShouldReturnNullValueWhenITryGetASingleUserModelAndCurrentBreathingStyleTechniqueDoesNotHaveAnyUsers(): void
    {
        // When
        $actual = $this->modelUnderTest->users()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetABreathingStyleTechniqueUsersCollectionAndBreathingStyleTechniqueDoesNotHaveAnyUsers(): void
    {
        // When
        $actual = $this->modelUnderTest->users()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnASingleBreathingStyleTechniqueUserModel(): void
    {
        // Given
        $user = Character::factory()->create();

        $user->breathingStyleTechniques()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->users()->first();

        // Then
        $this->assertEquals($user->_id, $actual->_id);
    }

    public function testShouldReturnSubstylesCollection(): void
    {
        // Given
        $user1 = Character::factory()->create();
        $user2 = Character::factory()->create();

        $user1->breathingStyleTechniques()->attach($this->modelUnderTest);
        $user2->breathingStyleTechniques()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->users()->get();

        // Then
        $this->assertTrue($actual->contains($user1));
        $this->assertTrue($actual->contains($user1));
    }
}
