<?php
class SQLString{
    public $tableName = "";
    public $tableColumn = array();
}
class ExcuteSelect extends SQLString{

    public function __construct($tableName,$tableColumn)
    {
        $this->tableName = $tableName;
        $this->tableColumn = $tableColumn;
    }
    public function excute()
    {
        $strTableColumn = "";
        foreach($this->tableColumn as $value){
            $strTableColumn .=  ",".$value;
        }
        $length = strlen($strTableColumn);
        $strTableColumn = substr($strTableColumn,  1, $length);
        $sqlString = "SELECT {$strTableColumn} FROM {$this->tableName}";
        return $sqlString;
    }
}
class ExcuteInsert extends SQLString{

    public $arrayValue = array();
    public function __construct($tableName,$tableColumn, $arrayValue)
    {
        $this->tableName = $tableName;
        $this->tableColumn = $tableColumn;
        $this->arrayValue = $arrayValue;
    }
    public function excute()
    {
        $strTableColumn = "";
        foreach($this->tableColumn as $value){
            $strTableColumn .=  ",".$value;
        }
        $length = strlen($strTableColumn);
        $strTableColumn = substr($strTableColumn,  1, $length);

        //Xu ly chuoi VALUES("a","b","c")

        $sqlString = "SELECT {$strTableColumn} FROM {$this->tableName}";
        return $sqlString;
    }
}

$kq = new ExcuteSelect("HOCSINH",["id","name"]);
$kq->excute();
echo $kq->excute();
?>