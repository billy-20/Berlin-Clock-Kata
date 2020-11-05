<?php

require "vendor/autoload.php";
require "BerlinClockKata.php";

//use Berlin_Clock_Kata\BerlinClockKata;


use PHPUnit\Framework\TestCase;

class BerlinClockKataTest extends TestCase
{
    private $berlinClockKata;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClockKata= new BerlinClockKata();
    }

    public function test_simpleMinutes_givenO_shouldReturnOOOO()
    {


        $actual= $this->berlinClockKata->simpleMinutes("0");
        $this->assertEquals("OOOO", $actual);


    }
    public function test_simpleMinutes_given1_shouldReturnYOOO()
    {
        $actual= $this->berlinClockKata->simpleMinutes("1");
        $this->assertEquals("YOOO", $actual);


    }
    public function test_simpleMinutes_given2_shouldReturnYYOO()
    {
        $actual= $this->berlinClockKata->simpleMinutes("2");
        $this->assertEquals("YYOO", $actual);


    }
    public function test_simpleMinutes_given3_shouldReturnYYYO()
    {
        $actual= $this->berlinClockKata->simpleMinutes("3");
        $this->assertEquals("YYYO", $actual);


    }
    public function test_simpleMinutes_given4_shouldReturnYYYY()
    {
        $actual= $this->berlinClockKata->simpleMinutes("4");
        $this->assertEquals("YYYY", $actual);


    }
    public function test_ligne5minutes_given0_shouldReturnOOOOOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("0");
        $this->assertEquals("O O O O O O O O O O O", $actual);

    }
    public function test_ligne5minutes_given5_shouldReturnYOOOOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("5");
        $this->assertEquals("Y O O O O O O O O O O", $actual);

    }
    public function test_ligne5minutes_given10_shouldReturnYYOOOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("10");
        $this->assertEquals("Y Y O O O O O O O O O", $actual);

    }
    public function test_ligne5minutes_given15_shouldReturnYYROOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("15");
        $this->assertEquals("Y Y R O O O O O O O O", $actual);

    }
    public function test_ligne5minutes_given20_shouldReturnYYRYOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("20");
        $this->assertEquals("Y Y R Y O O O O O O O", $actual);

    }
    public function test_ligne5minutes_given25_shouldReturnYYRYYOOOOOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("25");
        $this->assertEquals("Y Y R Y Y O O O O O O", $actual);

    }
    public function test_ligne5minutes_given30_shouldReturnYYRYYROOOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("30");
        $this->assertEquals("Y Y R Y Y R O O O O O", $actual);

    }
    public function test_ligne5minutes_given35_shouldReturnYYRYYRYYOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("35");
        $this->assertEquals("Y Y R Y Y R Y O O O O", $actual);

    }
    public function test_ligne5minutes_given40_shouldReturnYYRYYRYYOOO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("40");
        $this->assertEquals("Y Y R Y Y R Y Y O O O", $actual);

    }
    public function test_ligne5minutes_given45_shouldReturnYYRYYRYYROO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("45");
        $this->assertEquals("Y Y R Y Y R Y Y R O O", $actual);

    }
    public function test_ligne5minutes_given50_shouldReturnYYRYYRYYRYO()
    {
        $actual= $this->berlinClockKata->ligne5minutes("50");
        $this->assertEquals("Y Y R Y Y R Y Y R Y O", $actual);

    }
    public function test_ligne5minutes_given55_shouldReturnYYRYYRYYRYY()
    {
        $actual= $this->berlinClockKata->ligne5minutes("55");
        $this->assertEquals("Y Y R Y Y R Y Y R Y Y", $actual);

    }
    public function test_simpleHeures_given0_shouldReturnOOOO()
    {
        $actual= $this->berlinClockKata->simpleHeures("0");
        $this->assertEquals("OOOO", $actual);

    }
    public function test_simpleHeures_given1_shouldReturnROOO()
    {
        $actual= $this->berlinClockKata->simpleHeures("1");
        $this->assertEquals("ROOO", $actual);

    }
    public function test_simpleHeures_given2_shouldReturnRROO()
    {
        $actual= $this->berlinClockKata->simpleHeures("2");
        $this->assertEquals("RROO", $actual);

    }
    public function test_simpleHeures_given3_shouldReturnRRRO()
    {
        $actual= $this->berlinClockKata->simpleHeures("3");
        $this->assertEquals("RRRO", $actual);

    }
    public function test_simpleHeures_given4_shouldReturnRRRR()
    {
        $actual= $this->berlinClockKata->simpleHeures("4");
        $this->assertEquals("RRRR", $actual);

    }


    public function test_ligne5Heures_given5_shouldReturnROOO()
    {
        $actual= $this->berlinClockKata->ligne5Heures("5");
        $this->assertEquals("ROOO", $actual);

    }
    public function test_ligne5Heures_given10_shouldReturnRROO()
    {
        $actual= $this->berlinClockKata->ligne5Heures("10");
        $this->assertEquals("RROO", $actual);

    }
    public function test_ligne5Heures_given15_shouldReturnRRRO()
    {
        $actual= $this->berlinClockKata->ligne5Heures("15");
        $this->assertEquals("RRRO", $actual);

    }
    public function test_ligne5Heures_given20_shouldReturnRRRR()
    {
        $actual= $this->berlinClockKata->ligne5Heures("20");
        $this->assertEquals("RRRR", $actual);

    }
    public function test_simpleSecondes_given0_shouldReturnR()
    {
        $actual= $this->berlinClockKata->simpleSecondes(0);
        $this->assertEquals("R", $actual);

    }
    public function test_simpleSecondes_given1_shouldReturnO()
    {
        $actual= $this->berlinClockKata->simpleSecondes(1);
        $this->assertEquals("O", $actual);

    }
    public function test_simpleSecondes_given2_shouldReturnR()
    {
        $actual= $this->berlinClockKata->simpleSecondes(2);
        $this->assertEquals("R", $actual);

    }
    public function test_simpleSecondes_given3_shouldReturnO()
    {
        $actual= $this->berlinClockKata->simpleSecondes(3);
        $this->assertEquals("O", $actual);

    }

    public function test_heureBerlin_given16h48min10s_shouldReturnR_RRRO_ROOO_YYRYYRYYROO_YYYO(){

        $actual = $this->berlinClockKata->horlogeBerlin(16,48,10);
        $this->assertEquals("R\nRRRO\nROOO\nY Y R Y Y R Y Y R O O\nYYYO", $actual);


    }







}
