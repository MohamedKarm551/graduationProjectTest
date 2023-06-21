<?php

class DataBase
{

    public string $last_query;
    public int $num_rows=0; //to store num of rows
    private mysqli|false $connection;
    private string $db_name;
    //private string $params_types = "";


    function __construct($db_n){
        $this->db_name = $db_n;
        $this->open_connection();
    }
    //Execute at the end
    function __destruct() {
        $this->close_connection();
    }
    private function open_connection(): void
    {
        $this->connection = new mysqli(localhost, db_user, db_pass) or die('D.B Connection Failed!');
        $this->connection->select_db($this->db_name) or die('D.B Selection Failed!');
        //Set Preparations To D.B
        $this->connection->query("SET NAMES utf8");
        $this->connection->query("set character set utf8");
        $this->connection->query("SET GLOBAL sql_mode = ''");
        $this->connection->query("SET SESSION sql_mode = ''");
    }
    private function close_connection(): void
    {
        if (isset($this->connection)) {
            $this->connection->close();
            unset($this->connection);
        }
    }

    // Confirming a query result set
    private function confirm_query($result_set): void
    {
        if (!$result_set) {
            $output = "Database query Failed: " . mysqli_connect_error() . "<br /><br />";
            $output .= "Last query: " . $this->last_query;
            die($output);
        }
    }

    private function query($sql): mysqli_result|bool
    {
        $this->last_query = $sql; //to use it again in confirm query function
        //die($this->last_query);
        $run = $this->connection->query($sql);
        $this->confirm_query($run);
        return $run;
    }

    private function validate_column_name($value){
        //die($value);
        if(preg_match("/^[(a-zA-Z_*, )]+$/",$value)){
            return($value);
        } else {
            die("look at column name!");
        }
    }

    /**
     * @param array|string $columns
     * @return string
     */
    private function prep_columns(array|string $columns): string
    {
        $sql = "";
        if(is_array($columns)){
            $i = 1;
            foreach($columns as $column){
                $column = $this->validate_column_name($column);
                $sql .= (str_contains($column,"as")||$column==="*") ?"$column":"`".$column."`";
                if($i!=count($columns)) $sql .= ", ";
                $i++;
            }
        } else {
            $sql = $columns != "*" ? "`".$this->validate_column_name($columns)."`" : $this->validate_column_name($columns);
        }
        return $sql;
    }

    /**
     * @param string $table
     * @param string | array $columns
     * @param string $where
     * @param bool|array $all
     * @param string $clause
     * @param string $external_where
     * @return false|array
     */
    public function fetch(string $table, string|array $columns="*", string $where="1", bool|array $all=true, string $clause="WHERE", string $external_where=""): false|array
    {
        $rows = [];
        $where .= h__v($external_where)?" ".$external_where:"";
        $sql = "SELECT ".$this->prep_columns($columns)." FROM `".$table."` ".$clause." ".$where;
        if(is_array($all)){
            $sql .= " LIMIT " . $all["offset"] . "," . $all["length"];
        } else {
            $sql .= $all ? "" : " LIMIT 1";
        }
        $this->last_query = $sql;
        //die($this->last_query);
            $result_set = $this->query($sql);
        if(mysqli_num_rows($result_set) > 0){
            if ($all) {
                while($row = mysqli_fetch_assoc($result_set)){
                    $rows[] = $row;
                }
                $this->num_rows = count($rows);
                return $rows;
            } else {
                return mysqli_fetch_assoc($result_set);
            }
        }
        return false;
    }


    //fetch join data from D.B

    /**
     * @param array $inner_collection
     * @param array|string $columns
     * @param string $where
     * @param bool|array $all
     * @return false|array
     */
    public function fetch__join(array $inner_collection, array|string $columns="*", string $where="1", bool|array $all=true): false|array
    {
        $inner_sql = "";
        foreach ($inner_collection as $i=> $table){
            if($i == "0"){
                $inner_sql .= "`".$table."`"; //primary column
            } else {
                $inner_sql .= " INNER JOIN ";
                $inner_sql .= "`".array_keys($table)[0]."`"; //secondary column
                $inner_sql .= " ON ".array_values($table)[0]; //on of column
            }
        }
        $sql = "SELECT ".$this->prep_columns($columns)." FROM ".$inner_sql." WHERE ".$where;
        if(is_array($all)){
            $sql .= " LIMIT " . $all["offset"] . "," . $all["length"];
        } else {
            $sql .= $all ? "" : " LIMIT 1";
        }
        $this->last_query = $sql;
        //die($sql);
        $rows = [];
        $result_set = $this->query($sql);
        if(mysqli_num_rows($result_set) > 0){
            while($row = mysqli_fetch_assoc($result_set)){
                $rows[] = $row;
            }
            $this->num_rows = count($rows);
            return $all ? $rows : $rows[0];
        }
        return false;
    }
}

$DB = new DataBase(db_name);