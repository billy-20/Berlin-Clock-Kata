<?php


class BerlinClockKata
{
    // O= off
    // Y=on(yellow)
    // R= on(red)

    public function simpleMinutes(int $int): string
    {
        if ($int % 5 == "1") return "YOOO";
        if ($int % 5 == "2") return "YYOO";
        if ($int % 5 == "3") return "YYYO";
        if ($int % 5 == "4") return "YYYY";
         return "OOOO";
    }

    public function ligne5minutes(int $int): string
    {
    $int =$int -$int%5;

        if ($int == "5") return "Y O O O O O O O O O O";
        if ($int == "10") return "Y Y O O O O O O O O O";
        if ($int == "15") return "Y Y R O O O O O O O O";
        if ($int == "20") return "Y Y R Y O O O O O O O";
        if ($int == "25") return "Y Y R Y Y O O O O O O";
        if ($int == "30") return "Y Y R Y Y R O O O O O";
        if ($int == "35") return "Y Y R Y Y R Y O O O O";
        if ($int == "40") return "Y Y R Y Y R Y Y O O O";
        if ($int == "45") return "Y Y R Y Y R Y Y R O O";
        if ($int == "50") return "Y Y R Y Y R Y Y R Y O";
        if ($int == "55") return "Y Y R Y Y R Y Y R Y Y";

        return "O O O O O O O O O O O";

    }

    public function simpleHeures(int $int): string
    {


        if ($int % 5 == "1") return "ROOO";
        if ($int % 5 == "2") return "RROO";
        if ($int % 5 == "3") return "RRRO";
        if ($int % 5 == "4") return "RRRR";
        return "OOOO";
    }

    public function ligne5Heures(int $int): string
    {
        $int =$int - $int%5;

        if ($int  == "5") return "ROOO";
        if ($int  == "10") return "RROO";
        if ($int  == "15") return "RRRO";
        if ($int  == "20") return "RRRR";

        return "OOOO";
    }

    public function simpleSecondes(int $int): string
    {
        if ($int % 2 == 0 ) {
            return "R";

        }else{
            return "O";
        }

    }

    public function horlogeBerlin(string $heures , string $minutes , string $secondes ): string
    {
        $heureBerlin= "";

        $heureBerlin= $heureBerlin . $this->simpleSecondes($secondes) . "\n";
        $heureBerlin=$heureBerlin . $this->ligne5Heures($heures) . "\n";
        $heureBerlin=$heureBerlin . $this->simpleHeures($heures) ."\n";
        $heureBerlin = $heureBerlin . $this->ligne5minutes($minutes) ."\n";
        $heureBerlin=$heureBerlin . $this->simpleMinutes($minutes);

        return $heureBerlin;


    }








}