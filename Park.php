<?php

// __DIR__ is a *magic constant* with the directory path containing this file.
// This allows us to correctly require_once Model.php, no matter where this file is being required from.
require_once __DIR__ . '/Model.php';

class Park extends Model
{
    /** Insert a new entry into the database */


    protected function insert()
    {
        // @TODO: Use prepared statements to ensure data security


        if (isset($this->attributes['name'])) {
            $name = $this->attributes['name'];
        }


        if (isset($this->attributes['location'])) {
            $email = $this->attributes['location'];
        }

        
        if (isset($this->attributes['date_established'])) {
            $password = $this->attributes['date_established'];
        }
        if (isset($this->attributes['area_in_acres'])) {
            $password = $this->attributes['area_in_acres'];
        }
        if (isset($this->attributes['description'])) {
            $password = $this->attributes['description'];
        }

        $stmt = self::$dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');




        // @TODO: You will need to iterate through all the attributes to build the prepared query

        foreach ($this->attributes as $key=>$value) {
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
            
        }



        // @TODO: After the insert, add the id back to the attributes array
        //        so the object properly represents a DB record
        $stmt->execute();

        $lastId=self::$dbc->lastInsertId();

        $this->attributes['id'] = $lastId;
    }

    /** Update existing entry in the database */
    protected function update()
    {
        // @TODO: Use prepared statements to ensure data security

        if (isset($this->attributes['name'])) {
            $name = $this->attributes['name'];
        }


        if (isset($this->attributes['location'])) {
            $email = $this->attributes['location'];
        }

        
        if (isset($this->attributes['date_established'])) {
            $password = $this->attributes['date_established'];
        }
        if (isset($this->attributes['area_in_acres'])) {
            $password = $this->attributes['area_in_acres'];
        }
        if (isset($this->attributes['description'])) {
            $password = $this->attributes['description'];
        }

        $stmt = self::$dbc->prepare('UPDATE national_parks SET name = :name, location = :location, date_established = :date_established, area_in_acres = :area_in_acres, description = :description WHERE id=:id');

        // @TODO: You will need to iterate through all the attributes to build the prepared query


        foreach ($this->attributes as $key=>$value) {
            $stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
            
        }

        $stmt->bindValue(':' . 'id', $this->attributes['id'], PDO::PARAM_INT);

            $stmt->execute();
    }

    /**
     * Find a single record in the DB based on its id
     *
     * @param int $id id of the user entry in the database
     *
     * @return User An instance of the User class with attributes array set to values from the database
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements



        $selectQuery = 'SELECT * FROM national_parks WHERE id=:id';

        $stmt = self::$dbc->prepare($selectQuery);

        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        $stmt->execute();



        // @TODO: Store the result in a variable named $result

        $result = $stmt->fetch(PDO::FETCH_ASSOC);



        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result) {
            $instance = new static($result);
        }
        return $instance;
    }

    /**
     * Find all records in a table
     *
     * @return User[] Array of instances of the User class with attributes set to values from database
     */
    public static function all($offset,$limit)
    {
        self::dbConnect();

        // @TODO: Learning from the find method, return all the matching records

        $query = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset";
        $stmt = self::$dbc->prepare($query);

        var_dump($limit);

        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
        $stmt->execute();


        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function delete($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements



        $selectQuery = 'DELETE * FROM national_parks WHERE id=:id';

        $stmt = self::$dbc->prepare($selectQuery);

        $stmt->bindValue(':id', $id, PDO::PARAM_STR);

        $stmt->execute();


    }
}


