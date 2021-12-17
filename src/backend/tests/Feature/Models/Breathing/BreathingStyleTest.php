<?php

namespace Tests\Feature\Models\Breathing;

use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use App\Models\Character\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BreathingStyleTest extends TestCase
{
    use RefreshDatabase;

    private BreathingStyle $modelUnderTest;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = BreathingStyle::factory()->create();
    }

    public function testShouldReturnNullValueWhenITryToGetAParentStyleAndCurrentBreathingStyleDoesNotHaveAParentStyle(): void
    {
        // When
        $actual =  $this->modelUnderTest->parentStyle()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnASingleParentStyleModel(): void
    {
        // Given
        $parentStyle = BreathingStyle::factory()->create();

        $this->modelUnderTest->parentStyle()->associate($parentStyle)->save();

        // When & Then
        $this->assertEquals($parentStyle->_id, $this->modelUnderTest->_parentId);
    }

    public function testShouldReturnNullValueWhenITryGetASingleSubstyleModelAndCurrentBreathingStyleDoesNotHaveAnySubstyles(): void
    {
        // When
        $actual = $this->modelUnderTest->subStyles()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetASubstylesCollectionAndBreathingStyleDoesNotHaveAnySubstyles(): void
    {
        // When
        $actual = $this->modelUnderTest->subStyles()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnASingleSubstyleModel(): void
    {
        // Given
        $substyle = BreathingStyle::factory()->create();

        $substyle->parentStyle()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->subStyles()->first();

        // Then
        $this->assertEquals($substyle->_id, $actual->_id);
    }

    public function testShouldReturnSubstylesCollection(): void
    {
        // Given
        $substyle1 = BreathingStyle::factory()->create();
        $substyle2 = BreathingStyle::factory()->create();

        $substyle1->parentStyle()->associate($this->modelUnderTest)->save();
        $substyle2->parentStyle()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->subStyles()->get();

        // Then
        $this->assertTrue($actual->contains($substyle1));
        $this->assertTrue($actual->contains($substyle2));
    }

    public function testShouldReturnNullValueWhenITryToGetASingleTechniqueModelAndBreathingStyleDoesNotHaveAnyTechniques(): void
    {
        // When
        $actual = $this->modelUnderTest->techniques()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetATechniquesCollectionAndBreathingStyleDoesNotHaveAnyTechniques(): void
    {
        // When
        $actual = $this->modelUnderTest->techniques()->get();

        // Then
        $this->assertEmpty($actual);
    }


    public function testShouldReturnASingleTechniqueModel(): void
    {
        // Given
        $technique = BreathingStyleTechnique::factory()->create();

        $technique->style()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->techniques()->first();

        // Then
        $this->assertEquals($technique->_id, $actual->_id);
    }

    public function testShouldReturnStyleTechniquesCollection(): void
    {
        // Given
        $technique1 = BreathingStyleTechnique::factory()->create();
        $technique2 = BreathingStyleTechnique::factory()->create();

        $technique1->style()->associate($this->modelUnderTest)->save();
        $technique2->style()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->techniques()->get();

        // Then
        $this->assertTrue($actual->contains($technique1));
        $this->assertTrue($actual->contains($technique2));
    }

    public function testShouldReturnNullValueWhenITryToGetASingleStyleUserModelAndBreathingStyleDoesNotHaveAnyUsers(): void
    {
        // When
        $actual = $this->modelUnderTest->users()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetAStyleUsersCollectionAndBreathingStyleDoesNotHaveAnyUsers(): void
    {
        // When
        $actual = $this->modelUnderTest->users()->get();

        // Then
        $this->assertEmpty($actual);
    }


    public function testShouldReturnSingleUserModel(): void
    {
        // Given
        $user = Character::factory()->create();

        $user->breathingStyles()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->users()->first();

        // Then
        $this->assertEquals($user->_id, $actual->_id);
    }

    public function testShouldReturnStyleUsersCollection(): void
    {
        // Given
        $user1 = Character::factory()->create();
        $user2 = Character::factory()->create();

        $user1->breathingStyles()->attach($this->modelUnderTest);
        $user2->breathingStyles()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->users()->get();

        // Then
        $this->assertTrue($actual->contains($user1));
        $this->assertTrue($actual->contains($user2));
    }
}
