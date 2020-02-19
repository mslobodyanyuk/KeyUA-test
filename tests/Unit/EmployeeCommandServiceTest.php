<?php

namespace Tests\Unit;

use App\Services\EmployeeCommandService;
use Tests\TestCase;

class EmployeeCommandServiceTest extends TestCase
{

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
    public function testContainsSpecialty($specialty, $specialties)
    {
        $this->assertContains($specialty, $specialties);
    }

    /**
     *@dataProvider searchNotSpecialtyProvider
     */
    public function testNotContainsSpecialty($specialty,$specialties)
    {
        $this->assertNotContains($specialty, $specialties);
    }

    public function searchSkillProvider(){

        return [
            [
                'writeCode', ['writeCode', 'testCode', 'communicateWithManager', 'draw', 'setTasks']
            ]
        ];
    }

    public function searchNotSkillProvider(){

        return [
            [
                'drive', ['writeCode', 'testCode', 'communicateWithManager', 'draw', 'setTasks']
            ]
        ];
    }

    /**
     * @dataProvider searchSkillProvider
     */
    public function testContainsSkills($skill,$skills)
    {
        $this->assertContains($skill, $skills);
    }

    /**
     * @dataProvider searchNotSpecialtyProvider
     */
    public function testNotContainsSkills($skill,$skills)
    {
        $this->assertNotContains($skill,$skills);
    }

    public function specialtyCanDoActionProvider(){

        return [
                    ['programmer', 'writeCode', 'true']
        ];
    }

    public function specialtyNotCanDoActionProvider(){

        return [
            ['programmer', 'draw', 'true']
        ];
    }

    public function specialtyNotCanDoNotActionProvider(){

        return [
            ['programmer', 'draw', 'false']
        ];
    }

    public function specialtyCanDoNotActionProvider(){

        return [
            ['programmer', 'writeCode', 'false']
        ];
    }

    /**
     * @dataProvider specialtyCanDoActionProvider
     */
    public function testEqualsSpecialtyCanDoAction($specialty, $action, $actual)
    {

        $this->assertEquals(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testNotEqualsSpecialtyCanDoAction($specialty, $action, $actual)
    {
        $this->assertNotEquals(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoNotActionProvider
     */
    public function testEqualsSpecialtyNotCanDoAction($specialty, $action, $actual)
    {
        $this->assertEquals(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyCanDoNotActionProvider
     */
    public function testNotEqualsSpecialtyNotCanDoAction($specialty, $action, $actual)
    {
        $this->assertNotEquals(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyCanDoActionProvider
     */
    public function testSameSpecialtyCanDoAction($specialty, $action, $actual)
    {
        $this->assertSame(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testNotSameSpecialtyCanDoAction($specialty, $action, $actual)
    {
        $this->assertNotSame(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoNotActionProvider
     */
    public function testSameSpecialtyNotCanDoAction($specialty, $action, $actual)
    {
        $this->assertSame(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testNotSameSpecialtyNotCanDoAction($specialty, $action, $actual)
    {
        $this->assertNotSame(EmployeeCommandService::canDoAction($specialty, $action), $actual);
    }

    /**
     * @dataProvider specialtyCanDoActionProvider
     */
    public function testTrueSpecialtyCanDoAction($specialty, $action, $actual)
    {
        $this->assertTrue(EmployeeCommandService::canDoAction($specialty, $action) == $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testFalseSpecialtyCanDoAction($specialty, $action, $actual)
    {
        $this->assertFalse(EmployeeCommandService::canDoAction($specialty, $action) == $actual);
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testNotNullSpecialtyCanDoAction($specialty, $action)
    {
        $this->assertNotNull(EmployeeCommandService::canDoAction($specialty, $action));
    }

    /**
     * @dataProvider specialtyNotCanDoActionProvider
     */
    public function testNotEmptySpecialtyCanDoAction($specialty, $action)
    {
        $this->assertNotEmpty(EmployeeCommandService::canDoAction($specialty, $action));
    }

}
