<?php


class Berlin_clock_kata
{
        // O= off
        // Y=on(yellow)
        // R= on(red)

    public function simpleMinutes(int $int ):string
    {
        if ($int % 5 == "1") return "YOOO";
        if ($int % 5 == "2") return "YYOO";
        if ($int % 5 == "3") return "YYYO";
        if ($int % 5 == "4") return "YYYY";
    }

    public function simple5minutes(int $int ): string
    {
        $int =- $int%5;

        if($int == "5") return "Y O O O O O O O O O O";
        if($int == "10") return "Y Y O O O O O O O O O";
        if($int == "15") return "Y Y R O O O O O O O O";
        if($int == "20") return "Y Y R Y O O O O O O O";
        if($int == "25") return "Y Y R Y Y O O O O O O";
        if($int == "30") return "Y Y R Y Y R O O O O O";
        if($int == "35") return "Y Y R Y Y R Y O O O O";
        if($int == "40") return "Y Y R Y Y R Y Y O O O";
        if($int == "45") return "Y Y R Y Y R Y Y R O O";
        if($int == "50") return "Y Y R Y Y R Y Y R Y O";
        if($int == "55") return "Y Y R Y Y R Y Y R Y Y";


    }

    public function simpleHeures(int $int ):string
    {

    }









   /* public function simpleMinutes(int $int) : string
    {
    return $this->tableSimpleMinutes($int);
    }


    public function tableSimpleMinutes(int $ampoules ): array
    {
        for( $i=0 ; $i<4 ; $i++){
            if($i%3==0){
                $this->tableauMinutes[$i]="on";
            }
        }
        return $this->tableauMinutes;
    }
*/

}