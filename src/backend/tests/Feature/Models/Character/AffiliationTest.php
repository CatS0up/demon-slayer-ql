<?php

namespace Tests\Feature\Models\Character;

use App\Models\Character\Affiliation;
use App\Models\Character\Character;
use Tests\TestCase;

class AffiliationTest extends TestCase
{
    private Affiliation $modelUnderTest;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = Affiliation::factory()->create();
    }

    public function testShouldReturnNullValueWhenAffiliationDoesNotHaveParentAffiliation(): void
    {

        // When
        $actual = $this->modelUnderTest->parentAffiliation()->first();

        // Then

        $this->assertNull($actual);
    }

    public function testShouldReturnParentAffiliationModel(): void
    {
        // Given
        $parentAffiliation = Affiliation::factory()->create();

        $this->modelUnderTest->parentAffiliation()->associate($parentAffiliation)->save();

        // When & Then

        $this->assertEquals($parentAffiliation->_id, $this->modelUnderTest->_parentId);
    }

    public function testShouldReturnNullValueWhenITryGetASingleSubaffiliationModelAndCurrentAffiliationDoesNotHaveAnySubaffiliations(): void
    {
        // When
        $actual = $this->modelUnderTest->subAffiliations()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetASubaffiliationsCollectionAndAffiliationDoesNotHaveAnySubaffiliations(): void
    {
        // When
        $actual = $this->modelUnderTest->subAffiliations()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnASingleSubaffiliationModel(): void
    {
        // Given
        $subAffiliation = Affiliation::factory()->create();

        $subAffiliation->parentAffiliation()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->subAffiliations()->first();

        // Then
        $this->assertEquals($subAffiliation->_id, $actual->_id);
    }

    public function testShouldReturnSubaffiliationsCollection(): void
    {
        // Given
        $subAffiliation1 = Affiliation::factory()->create();
        $subAffiliation2 = Affiliation::factory()->create();

        $subAffiliation1->parentAffiliation()->associate($this->modelUnderTest)->save();
        $subAffiliation2->parentAffiliation()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->subAffiliations()->get();

        // Then
        $this->assertTrue($actual->contains($subAffiliation1));
        $this->assertTrue($actual->contains($subAffiliation1));
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterModelAndCurrentAffiliationDoesNotHaveAnyMembers(): void
    {
        // When
        $actual = $this->modelUnderTest->members()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetAMembersCollectionAndAffiliationDoesNotHaveAnyMembers(): void
    {
        // When
        $actual = $this->modelUnderTest->subAffiliations()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacterModel(): void
    {
        // Given
        $character = Character::factory()->create();

        $character->affiliations()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->members()->first();

        // Then
        $this->assertEquals($character->_id, $actual->_id);
    }

    public function testShouldReturnAffiliationMembersCollection(): void
    {
        // Given
        $character1 = Character::factory()->create();
        $character2 = Character::factory()->create();

        $character1->affiliations()->attach($this->modelUnderTest);
        $character2->affiliations()->attach($this->modelUnderTest);

        // When
        $actual = $this->modelUnderTest->members()->get();

        // Then
        $this->assertTrue($actual->contains($character1));
        $this->assertTrue($actual->contains($character2));
    }
}
