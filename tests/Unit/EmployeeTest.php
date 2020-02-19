<?php

namespace Tests\Unit;

use App\Console\Commands\Employee;
use Tests\TestCase;

class EmployeeTest extends TestCase
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
     *@dataProvider specialtyProvider
     */
    public function testTrueEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'programmer';
        $this->assertTrue($specialty == Employee::$specialty);
    }

    /**
     *@dataProvider specialtyProvider
     */
    public function testFalseEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'tester';
        $this->assertFalse($specialty == Employee::$specialty);
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
     *@dataProvider searchSpecialtyProvider
     */
    public function testContainsEmployeeSpecialty($specialty,$specialties)
    {
        Employee::$specialty = $specialty;
        $this->assertContains(Employee::$specialty, $specialties);
    }

    /**
     *@dataProvider searchNotSpecialtyProvider
     */
        public function testNotContainsEmployeeSpecialty($specialty,$specialties)
        {
            Employee::$specialty = $specialty;
            $this->assertNotContains(Employee::$specialty, $specialties);
        }

    public function skillProvider(){
        return [
                    [
                        'writeCode'
                    ]
        ];
    }

    /**
     *@dataProvider skillProvider
     */
    public function testTrueEmployeeSkill($skill)
    {
        Employee::$skill = 'writeCode';
        $this->assertTrue(Employee::$skill == $skill);
    }

    /**
     *@dataProvider skillProvider
     */
    public function testFalseEmployeeSkill($skill)
    {
        Employee::$skill = 'testCode';
        $this->assertFalse(Employee::$skill == $skill);
    }

    public function skillsProvider(){

        return [
                    [
                        'writeCode',
                        'testCode',
                        'communicateWithManager',
                        'draw',
                        'setTasks'
                    ]
                ];
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
     *@dataProvider searchSkillProvider
     */
    public function testSearchContainsEmployeeSkill($skill,$skills)
    {
        Employee::$skill = $skill;
        $this->assertContains(Employee::$skill, $skills);
    }

    /**
     *@dataProvider searchNotSkillProvider
     */
    public function testNotContainsEmployeeSkill($skill,$skills)
    {
        Employee::$skill = $skill;
        $this->assertNotContains(Employee::$skill, $skills);
    }


    public function testNullEmployeeSpecialty()
    {
        Employee::$specialty = null;
        $this->assertNull(Employee::$specialty);
    }

    /**
     *@dataProvider specialtyProvider
     */
    public function testNotNullEmployeeSpecialty($specialty)
    {
        Employee::$specialty = $specialty;
        $this->assertNotNull(Employee::$specialty);
    }

    public function testNullEmployeeSkill()
    {
        Employee::$skill = null;
        $this->assertNull(Employee::$skill);
    }

    /**
     *@dataProvider skillProvider
     */
    public function testNotNullEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertNotNull(Employee::$skill);
    }

    public function testEmptyEmployeeSpecialty()
    {
        Employee::$specialty = '';
        $this->assertEmpty(Employee::$specialty);
    }

    /**
     *@dataProvider specialtyProvider
     */
    public function testNotEmptyEmployeeSpecialty($specialty)
    {
        Employee::$specialty = $specialty;
        $this->assertNotEmpty(Employee::$specialty);
    }

    public function testEmptyEmployeeSkill()
    {
        Employee::$skill = '';
        $this->assertEmpty(Employee::$skill);
    }

    /**
     *@dataProvider skillProvider
     */
    public function testNotEmptyEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertNotEmpty(Employee::$skill);
    }
/***********************Attribute***************************************************************************************
 */

    /**Specialty************************************************************************************************************
     */
    public function testAttributeEmptyEmployeeSpecialty()
    {
        Employee::$specialty = '';
        $this->assertAttributeEmpty('specialty', Employee::class);
    }

    public function testAttributeNotEmptyEmployeeSpecialty()
    {
        Employee::$specialty = 'programmer';
        $this->assertAttributeNotEmpty('specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeContainsEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'programmer';
        $this->assertAttributeContains($specialty,'specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotContainsEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'designer';
        $this->assertAttributeNotContains($specialty,'specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeSameEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'programmer';
        $this->assertAttributeSame($specialty,'specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotSameEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'designer';
        $this->assertAttributeNotSame($specialty,'specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeEqualsEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'programmer';
        $this->assertAttributeEquals($specialty,'specialty', Employee::class);
    }

    /**
     * @dataProvider specialtyProvider
     */
    public function testAttributeNotEqualsEmployeeSpecialty($specialty)
    {
        Employee::$specialty = 'designer';
        $this->assertAttributeNotEquals($specialty,'specialty', Employee::class);
    }

    /**Skill************************************************************************************************************
     */
    public function testAttributeEmptyEmployeeSkill()
    {
        Employee::$skill = '';
        $this->assertAttributeEmpty('skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeNotEmptyEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeNotEmpty('skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeContainsEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeContains('writeCode','skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeNotContainsEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeNotContains('testCode','skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeSameEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeSame('writeCode','skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeNotSameEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeNotSame('testCode','skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeEqualsEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeEquals('writeCode','skill', Employee::class);
    }

    /**
     * @dataProvider skillProvider
     */
    public function testAttributeNotEqualsEmployeeSkill($skill)
    {
        Employee::$skill = $skill;
        $this->assertAttributeNotEquals('testCode','skill', Employee::class);
    }

}
