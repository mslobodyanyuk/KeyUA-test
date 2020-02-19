<?php

namespace Tests\Unit;

use App\Services\CompanyCommandService;
use Tests\TestCase;

class CompanyCommandServiceTest extends TestCase
{
    /**
     * @return array
     */
        public function specialtySkillsProvider(){
            return [
                        [
                            'programmer', ['writeCode', 'testCode', 'communicateWithManager']
                        ]
            ];
        }

    /**
     * @return array
     */
    public function specialtyNotSkillsProvider(){
        return [
                        [
                            'programmer', ['communicateWithManager', 'draw']
                        ]
        ];
    }

    /**
     * @return array
     */
    public function specialtyProvider(){
        return [
            ['programmer']
        ];
    }

    /**
     * @return array
     */
    public function searchSpecialtyProvider(){

        return [
                    [
                        'programmer', ['programmer', 'designer', 'tester', 'manager']
                    ]
        ];
    }

    /**
     * @return array
     */
    public function searchNotSpecialtyProvider(){

        return [
            [
                'driver', ['programmer', 'designer', 'tester', 'manager']
            ]
        ];
    }

    /**
     *@dataProvider searchSpecialtyProvider
     */
    public function testContainsSpecialty($specialty, $specialties)
    {
        $this->assertContains($specialty, $specialties);
    }

    /**
     * @dataProvider searchNotSpecialtyProvider
     */
    public function testNotContainsSpecialty($specialty, $specialties)
    {
        $this->assertNotContains($specialty, $specialties);
    }


    /**
     * @dataProvider specialtySkillsProvider
     */
    public function testArraySubsetSpecialtySkills($specialty, $skills)
    {
        $this->assertArraySubset(CompanyCommandService::getSkillsBySpecialtyName($specialty), $skills);
    }

    /**
     * @dataProvider specialtySkillsProvider
     */
    public function testEqualsSpecialtySkills($specialty, $skills)
    {
        $this->assertEquals(CompanyCommandService::getSkillsBySpecialtyName($specialty), $skills);
    }

    /**
     * @dataProvider specialtyNotSkillsProvider
     */
    public function testNotEqualsSpecialtySkills($specialty, $skills)
    {
        $this->assertNotEquals(CompanyCommandService::getSkillsBySpecialtyName($specialty), $skills);
    }

    /**
     * @dataProvider specialtySkillsProvider
     */
    public function testSameSpecialtySkills($specialty, $skills)
    {
        $this->assertSame(CompanyCommandService::getSkillsBySpecialtyName($specialty), $skills);
    }

    /**
     * @dataProvider specialtyNotSkillsProvider
     */
    public function testNotSameSpecialtySkills($specialty, $skills)
    {
        $this->assertNotSame(CompanyCommandService::getSkillsBySpecialtyName($specialty), $skills);
    }

    /**
     *@dataProvider specialtyProvider
     */
    public function testNotNullSpecialtySkills($specialty)
    {
        $this->assertNotNull(CompanyCommandService::getSkillsBySpecialtyName($specialty));
    }

    /**
     *@dataProvider specialtyProvider
     */
    public function testNotEmptySpecialtySkills($specialty)
    {
        $this->assertNotEmpty(CompanyCommandService::getSkillsBySpecialtyName($specialty));
    }

}
