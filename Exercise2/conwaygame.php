<?php
class ConWayGame{
    public $arrayMatrix = array();
    public function __construct($row,$col){

        //Khoi tao ma tran va gan gia tri vao 2 mang
        for($i = 0;$i<$row;$i++)
        {
            $arrCol = array();
            for($j = 0;$j < $col;$j++)
            {
                $rand = rand(0,1);
                $arrCol[] = $rand;
                echo $rand;
            }
            $this->arrayMatrix[] = $arrCol; 
            echo "<br/>";
        }
        
        // for($i = 0;$i<$row;$i++)
        // {
        //     for($j = 0;$j < $col;$j++)
        //     {
        //         echo $this->arrayMatrix[$i][$j];
        //     }
        //     echo "<br/>";
        // }


        // echo $this->arrayMatrix[0][1];
        // echo '<pre>';
        // print_r($this->arrayColumn); 
        // echo '</pre>';
        // echo "<hr/>";
        
        // echo '<pre>';
        // print_r($this->arrayMatrix); 
        // echo '</pre>';
    }

    
}

$user = new ConWayGame(4,8);
?>