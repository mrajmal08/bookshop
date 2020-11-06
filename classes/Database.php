<?php

class Database
{
    protected $conn;

    /**
     * Database constructor
     * @param null $table
     */
    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=bookshop",
                "root", "");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            return "Connection failed: " . $e->getMessage();
        }
    }


    /**
     * this function return fetched data adn required table name and where condition
     * @param bool $where
     * @return mixed
     */
    public function show($table, $single_user = false, $where = false)
    {

        $query = "SELECT * FROM {$table} ";
        if ($where) {
            $query .= " WHERE " . $where;
        }
        if ($single_user) {
            $data = $this->conn->query($query);
            return $data->fetch(PDO::FETCH_ASSOC);
        } else {
            $data = $this->conn->query($query);
            return $data->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    /**
     * This function used to insert the values of ay type of data given by columns,values and data
     * @param $columns
     * @param $values
     * @param $data
     * @return string
     */
    public function insert($columns, $values, $data, $table)
    {
        try {
            $query = "INSERT INTO {$table} (" . implode(',', $columns) . ") VALUES (" . implode(',', $values) . ")";
            $exe = $this->conn->prepare($query);
            return $exe->execute($data);

            //exception
        } catch (PDOException $e) {
            return "Error : " . $e->getMessage();
        }
    }

    /**
     * this function used for delete the values
     * @return mixed
     */
    public function delete($where)
    {
        $table = $this->table;
        $query = "DELETE FROM {$table} ";
        if (!empty($where)) {
            $query .= " WHERE " . $where;
        }
        $exe = $this->conn->prepare($query);
        return $exe->execute();
    }

    /**
     * update function for ay type of data
     * @param $data
     * @return mixed
     */
    public function update($data, $where)
    {
        $table = $this->table;
        try {
            $original = $data['data'];
            $cols = [];
            foreach ($original as $key => $value) {
                $cols[] = "$key = '$value'";
            }
            $query = "UPDATE $table SET " . implode(', ', $cols) . " WHERE $where";
            $exe = $this->conn->prepare($query);
            return $exe->execute();
        } catch (PDOException $e) {
            return "Error : " . $e->getMessage();
        }
    }

    /**
     * login function
     * @param $email
     * @param $password
     * @return string
     */
    public function login_user($email, $password)
    {

        if ($email != "" && $password != "") {
            try {
                //check user for verification
                $where = " email = '" . $email . "' AND password = '" . $password . "' AND status = 1";
                $row = $this->show(1, $where);
                if (!empty($row) && $row) {
                    $_SESSION['sess_user_id'] = $row['id'];
                    $_SESSION['sess_name'] = $row['name'];
                    $_SESSION['role'] = $row['role_id'];
                    header("location: home");
                    exit;
                } else {
                    return "<span style='color: red'>Invalid email and password!</span>";
                }
            } catch (PDOException $e) {
                return "Error : " . $e->getMessage();
            }
        } else {
            return "<span style='color: red'>Both fields are required!</span>";
        }
    }

    /**
     * Email verification function
     */
    public function email_verification($email, $table)
    {


        $query = "SELECT * FROM {$table} WHERE email = '$email'";
        $data = $this->conn->query($query);
        $result =  $data->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result)){
             return $result;
        }else{
            return 'you already registered';
        }
    }
}
