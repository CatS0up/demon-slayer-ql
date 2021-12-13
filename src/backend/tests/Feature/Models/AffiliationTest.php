<?php

namespace Tests\Feature\Models;

use App\Models\Affiliation;
use Tests\TestCase;

class AffiliationTest extends TestCase
{
    public function testShouldReturnNullWhenAffiliationHasNotAParentAffiliation(): void
    {
        // Given

        /** @var Affiliation $modelUnderTest */
        $modelUnderTest = Affiliation::factory()->create();

        // When
        $actual = $modelUnderTest->parentAffilation()->first();

        // Then

        $this->assertNull($actual);
    }

    public function testShouldReturnParentAffiliationOfAffiliationModel(): void
    {
        // Given

        /** @var Affiliation $parentModel */
        $parentModel = Affiliation::factory()
            ->hasSubAffiliations(
                1,
                [
                    'name' => 'child'
                ]
            )
            ->create(['name' => 'parent']);

        /** @var Affiliation $modelUnderTest */
        $modelUnderTest = Affiliation::firstWhere('name', 'child');

        // When
        $actual = $modelUnderTest->parentAffilation()->first();

        // Then
        $this->assertEquals($parentModel->_id, $actual->_id);
    }

    public function testShouldReturnChildtAffiliationOfAffiliationModel(): void
    {
        // Given

        /** @var Affiliation $modelUnderTest */
        $modelUnderTest = Affiliation::factory()
            ->hasSubAffiliations(
                1,
                [
                    'name' => 'child'
                ]
            )
            ->create(['name' => 'parent']);

        /** @var Affiliation $childModel */
        $childModel = Affiliation::firstWhere('name', 'child');

        // When
        $actual = $modelUnderTest->subAffiliations()->first();

        // Then
        $this->assertEquals($childModel->_id, $actual->_id);
    }

    public function testShouldReturnAllModelSubAffiliations(): void
    {
        // Given

        /** @var Affiliation $modelUnderTest */
        $modelUnderTest = Affiliation::factory()
            ->hasSubAffiliations(20)
            ->create();

        // When
        $actual = $modelUnderTest->subAffiliations()->get()->toArray();

        // Then

        $this->assertSame(
            $modelUnderTest->subAffiliations()->get()->toArray(),
            $actual
        );
    }
}
