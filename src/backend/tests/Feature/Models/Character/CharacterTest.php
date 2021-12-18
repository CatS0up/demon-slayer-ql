<?php

namespace Tests\Feature\Models\Character;

use App\Models\BloodDemonArt;
use App\Models\BloodDemonArtTechnique;
use App\Models\Breathing\BreathingStyle;
use App\Models\Breathing\BreathingStyleTechnique;
use App\Models\Character\Ability;
use App\Models\Character\Affiliation;
use App\Models\Character\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CharacterTest extends TestCase
{
    use RefreshDatabase;

    private Character $modelUnderTest;

    protected function setUp(): void
    {
        parent::setUp();

        $this->modelUnderTest = Character::factory()->create();
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterRelativeModelAndCharacterDoesNotHaveAnyRelatives(): void
    {
        // When
        $actual = $this->modelUnderTest->relatives()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetACharacterRelativesCollectionAndCharacterDoesNotHaveAnyRelatives(): void
    {
        // When
        $actual = $this->modelUnderTest->relatives()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacterRelativeModel(): void
    {
        // Given

        $relative = Character::factory()->create();

        $this->modelUnderTest->relatives()->attach([$relative->_id], ['kinship' => 'test']);

        // When
        $actual = $this->modelUnderTest->relatives()->first();

        // Then
        $this->assertEquals($relative->_id, $actual->_id);
    }

    public function testShouldReturnCharacterRelativesCollection(): void
    {
        // Given

        $relative1 = Character::factory()->create();
        $relative2 = Character::factory()->create();

        $this->modelUnderTest->relatives()->attach($relative1, ['kinship' => 'test']);
        $this->modelUnderTest->relatives()->attach($relative2, ['kinship' => 'test']);

        // When
        $actual = $this->modelUnderTest->relatives()->get();

        // Then
        $this->assertTrue($actual->contains($relative1));
        $this->assertTrue($actual->contains($relative2));
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterAffiliationModelAndCharacterDoesNotHaveAnyRelatedAffiliations(): void
    {
        // When
        $actual = $this->modelUnderTest->affiliations()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetACharacterAffiliationsCollectionAndCharacterDoesNotHaveAnyAssignedAffiliations(): void
    {
        // When
        $actual = $this->modelUnderTest->affiliations()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacterAffiliationModel(): void
    {
        // Given

        $affiliation = Affiliation::factory()->create();

        $this->modelUnderTest->affiliations()->attach($affiliation);

        // When
        $actual = $this->modelUnderTest->affiliations()->first();

        // Then
        $this->assertEquals($affiliation->_id, $actual->_id);
    }

    public function testShouldReturnCharacterAffiliationsCollection(): void
    {
        // Given

        $affiliation1 = Affiliation::factory()->create();
        $affiliation2 = Affiliation::factory()->create();

        $this->modelUnderTest->affiliations()->attach($affiliation1);
        $this->modelUnderTest->affiliations()->attach($affiliation2);

        // When
        $actual = $this->modelUnderTest->affiliations()->get();

        // Then
        $this->assertTrue($actual->contains($affiliation1));
        $this->assertTrue($actual->contains($affiliation2));
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterAbilityModelAndCharacterDoesNotHaveAnyAbilities(): void
    {
        // When
        $actual = $this->modelUnderTest->abilities()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetACharacterAbilitiesCollectionAndCharacterDoesNotHaveAnyAbilities(): void
    {
        // When
        $actual = $this->modelUnderTest->abilities()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacteAbilityModel(): void
    {
        // Given

        $ability = Ability::factory()->create();

        $this->modelUnderTest->abilities()->attach($ability);

        // When
        $actual = $this->modelUnderTest->abilities()->first();

        // Then
        $this->assertEquals($ability->_id, $actual->_id);
    }

    public function testShouldReturnCharacterAbilitiesCollection(): void
    {
        // Given

        $ability1 = Ability::factory()->create();
        $ability2 = Ability::factory()->create();

        $this->modelUnderTest->abilities()->attach($ability1);
        $this->modelUnderTest->abilities()->attach($ability2);

        // When
        $actual = $this->modelUnderTest->abilities()->get();

        // Then
        $this->assertTrue($actual->contains($ability1));
        $this->assertTrue($actual->contains($ability2));
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterBreathingStyleModelAndCharacterDoesNotHaveBreathingStyles(): void
    {
        // When
        $actual = $this->modelUnderTest->breathingStyles()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetACharacterBreathingStylesCollectionAndCharacterDoesNotHaveAnyBreathingStyles(): void
    {
        // When
        $actual = $this->modelUnderTest->breathingStyles()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacterBreathingStyleModel(): void
    {
        // Given

        $style = BreathingStyle::factory()->create();

        $this->modelUnderTest->breathingStyles()->attach($style);

        // When
        $actual = $this->modelUnderTest->breathingStyles()->first();

        // Then
        $this->assertEquals($style->_id, $actual->_id);
    }

    public function testShouldReturnCharacterBreathingStylesCollection(): void
    {
        // Given

        $style1 = BreathingStyle::factory()->create();
        $style2 = BreathingStyle::factory()->create();

        $this->modelUnderTest->breathingStyles()->attach($style1);
        $this->modelUnderTest->breathingStyles()->attach($style2);

        // When
        $actual = $this->modelUnderTest->breathingStyles()->get();

        // Then

        $this->assertTrue($actual->contains($style1));
        $this->assertTrue($actual->contains($style2));
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterBreathingStyleTechniqueModelAndCharacterDoesNotHaveBreathingStyleTechniques(): void
    {
        // When
        $actual = $this->modelUnderTest->breathingStyleTechniques()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnEmptyCollectionWhenITryToGetACharacterBreathingStyleTechniquesCollectionAndCharacterDoesNotHaveAnyBreathingStyleTechniques(): void
    {
        // When
        $actual = $this->modelUnderTest->breathingStyleTechniques()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnCharacterSingleBreathingStyleTechnique(): void
    {
        // Given

        $technique = BreathingStyleTechnique::factory()->create();

        $this->modelUnderTest->breathingStyleTechniques()->attach([$technique->_id]);

        // When
        $actual = $this->modelUnderTest->breathingStyleTechniques()->first();

        // Then
        $this->assertEquals($technique->_id, $actual->_id);
    }

    public function testShouldReturnCharacterBreathingStyleTechniqesCollection(): void
    {
        // Given

        $technique1 = BreathingStyleTechnique::factory()->create();
        $technique2 = BreathingStyleTechnique::factory()->create();

        $this->modelUnderTest->breathingStyleTechniques()->attach($technique1);
        $this->modelUnderTest->breathingStyleTechniques()->attach($technique2);

        // When
        $actual = $this->modelUnderTest->breathingStyleTechniques()->get();

        // Then

        $this->assertTrue($actual->contains($technique1));
        $this->assertTrue($actual->contains($technique2));
    }

    public function testShouldReturnNullWhenCharacterDoesNotHaveAnyBloodDemonArts(): void
    {

        // When
        $actual = $this->modelUnderTest->bloodDemonArts()->first();

        // Then
        $this->assertNull($actual);
    }

    public function testShouldReturnNullValueWhenITryGetASingleCharacterBloodDemonArtsModelAndCharacterDoesNotHaveAnyBloodDemonArtTechniques(): void
    {
        // When
        $actual = $this->modelUnderTest->bloodDemonArts()->get();

        // Then
        $this->assertEmpty($actual);
    }

    public function testShouldReturnSingleCharacterBloodDemonArtsModel(): void
    {
        // Given
        $technique = BloodDemonArt::factory()->create([
            '_characterId' => $this->modelUnderTest->_id
        ]);

        $technique->demon()->associate($this->modelUnderTest)->save();

        // When
        $actual = $this->modelUnderTest->bloodDemonArts()->first();

        // Then
        $this->assertEquals($technique->_id, $actual->_id);
    }

    public function testShouldReturnCharacterBloodDemonArtsCollection(): void
    {
        // Given

        $technique1 = BloodDemonArt::factory()
            ->create(['_characterId' => $this->modelUnderTest->_id]);
        $technique2 = BloodDemonArt::factory()
            ->create(['_characterId' => $this->modelUnderTest->_id]);

        // When
        $actual = $this->modelUnderTest->bloodDemonArts()->get();

        // Then

        $this->assertTrue($actual->contains($technique1));
        $this->assertTrue($actual->contains($technique2));
    }
}
