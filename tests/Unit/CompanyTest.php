<?php

namespace Tests\Unit;

use App\Console\Commands\Company;
use Tests\TestCase;

class CompanyTest extends TestCase
{

    /**
     * @return array
     */
    public function specialtyProvider(){
        return [
            ['programmer']
        ];
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testTrueCompanySpecialty($specialty)
    {
        Company::$specialty = 'programmer';
        $this->assertTrue(Company::$specialty == $specialty);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testFalseCompanySpecialty($specialty)
    {
        Company::$specialty = 'tester';
        $this->assertFalse(Company::$specialty == $specialty);
    }

    /**
     * @return array
     */
    public function specialtiesProvider(){
        return [
                    [
                        'programmer',
                        'designer',
                        'tester',
                        'manager'
                    ]
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
     * @dataProvider searchSpecialtyProvider
     */
    public function testContainsCompanySpecialty($specialty, $specialties)
    {
        Company::$specialty = $specialty;
        $this->assertContains(Company::$specialty, $specialties);
    }

    /**
     * @dataProvider searchNotSpecialtyProvider
     */
    public function testNotContainsCompanySpecialty($specialty,$specialties)
    {
        Company::$specialty = $specialty;
        $this->assertNotContains(Company::$specialty, $specialties);
    }


    public function testNullCompanySpecialty()
    {
        Company::$specialty = null;
        $this->assertNull(Company::$specialty);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testNotNullCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertNotNull(Company::$specialty);
    }

    public function testEmptyCompanySpecialty()
    {
        Company::$specialty = '';
        $this->assertEmpty(Company::$specialty);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testNotEmptyCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertNotEmpty(Company::$specialty);
    }
/***********************Attribute***************************************************************************************
*/

    public function testAttributeEmptyCompanySpecialty()
    {
        Company::$specialty = '';
        $this->assertAttributeEmpty('specialty',Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotEmptyCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeNotEmpty('specialty',Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeContainsCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeContains('programmer', 'specialty', Company::class);
    }

        /**
         * @dataProvider specialtyProvider
         */
    public function testAttributeNotContainsCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeNotContains('designer', 'specialty', Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeSameCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeSame( 'programmer', 'specialty', Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotSameCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeNotSame( 'designer', 'specialty', Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeEqualsCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeEquals( 'programmer', 'specialty', Company::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotEqualsCompanySpecialty($specialty)
    {
        Company::$specialty = $specialty;
        $this->assertAttributeNotEquals( 'tester', 'specialty', Company::class);
    }

}
