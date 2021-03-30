<?php

//function conectar(){
//    $user="root";
//    $pass="";
//    $server="localhost";
//    $db="oftalmologia";
//    $con = mysql_connect($server,$user,$pass) or die(mysql_error());
//    mysql_select_db('oftalmologia', $con);
//    
//    return $con;
//    
//}

class Database
{
    private $conexion;
    
    public function Database(){
      if(!isset($this->conexion)){
    
    $this->conexion = (mysql_connect('localhost','root','root123')) or die(mysql_error());
    mysql_select_db('erp', $this->conexion) or die(mysql_error());      
     
        mysql_query ("SET NAMES 'utf8'");
      }
    }
        
        public function backup_tables($tables = '*'){
          
             
            $link = mysql_connect($host,$user,$pass);
    mysql_select_db($name,$link);
    
    //get all of the tables
    if($tables == '*')
    {
        $tables = array();
        $result = mysql_query('SHOW TABLES');
        while($row = mysql_fetch_row($result))
        {
            $tables[] = $row[0];
        }
    }
    else
    {
        $tables = is_array($tables) ? $tables : explode(',',$tables);
    }
    
    //cycle through
    foreach($tables as $table)
    {
        $result = mysql_query('SELECT * FROM '.$table);
        $num_fields = mysql_num_fields($result);
        
        $return.= 'DROP TABLE '.$table.';';
        $row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
        $return.= "\n\n".$row2[1].";\n\n";
        
        for ($i = 0; $i < $num_fields; $i++) 
        {
            while($row = mysql_fetch_row($result))
            {
                $return.= 'INSERT INTO '.$table.' VALUES(';
                for($j=0; $j < $num_fields; $j++) 
                {
                    $row[$j] = addslashes($row[$j]);
                    $row[$j] = ereg_replace("\n","\\n",$row[$j]);
                    if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
                    if ($j < ($num_fields-1)) { $return.= ','; }
                }
                $return.= ");\n";
            }
        }
        $return.="\n\n\n";
    }
    
    //save file
    //$handle = fopen('../db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
        $handle = fopen('../../db-backup-'.date("Y-m-d-H-i-s").'.sql','w+');
    fwrite($handle,$return);
    fclose($handle);
        }


    public function query($consulta){
        $resultado = mysql_query($consulta, $this->conexion);
        if(!$resultado){
          echo "error bd";
          exit;
        }       
        return $resultado;
    }
    
    public function fetch_array($consulta){
        return mysql_fetch_array($consulta);
    }
    
    public function num_rows($consulta){
        return mysql_num_rows($consulta);
    }
    
    public function cerrar(){
        mysql_close();
    }
    
}

?>
