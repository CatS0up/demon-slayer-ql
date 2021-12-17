<?php

namespace Tests\Feature\Models\Character;

use App\Models\Character\Ability;
use App\Models\Character\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AbilityTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = Ability::factory()->create();
    }

    public function testShouldReturnCharacterModelWhichIsAssignedToAbility(): void
    {
        // Given
        $character = Character::factory()->create();

        $this->modelUnderTest->owners()->attach([$character->_id]);

        // When
        $actual = $this->modelUnderTest->owners()->first();

        // Then
        $this->assertEquals($character->_id, $actual->_id);
    }

    public function testShouldReturnNullValueWhenITryToGetASingleStyleCharacterModelAndAbilityDoesNotHaveAnyAssignedOwners(): void
    {
        // When
        $actual = $this->modelUnderTest->owners()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetAOwnersAssignedToTheAbilityCollectionAndBreathingStyleDoesNotHaveAnyAssignedOwners(): void
    {
        // When
        $actual = $this->modelUnderTest->owners()->get();

        // Then
        $this->assertEmpty($actual);
    }


    public function testShouldReturnSingleCharacterModel(): void
    {
        // Given
        $character = Character::factory()->create();

        $character->abilities()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->owners()->first();

        // Then
        $this->assertEquals($character->_id, $actual->_id);
    }

    public function testShouldReturnOwnersAssginedToTheAbilityCollection(): void
    {
        // Given
        $character1 = Character::factory()->create();
        $character2 = Character::factory()->create();

        $character1->abilities()->attach($this->modelUnderTest);
        $character2->abilities()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->owners()->get();

        // Then
        $this->assertTrue($actual->contains($character1));
        $this->assertTrue($actual->contains($character2));
    }
}
