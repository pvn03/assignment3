<?php
//extended class
class PersonBooks extends Books {
    public $first_name;
    public $last_name;
    public function __construct($first_name = null, $last_name = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    //first magic function
    public function __set($name, $value)
    {
        echo "Setting Name to '$value'\n";
        $this->data[$name] = $value;
    }

    public function get_name() {
        return $this->first_name . " " . $this->last_name;
    }
    public function set_name($name) {
        $split_name = explode(" ", $name, 2);
        $length = count($split_name);
        $rv = true;
        if ($length === 0) {
            $rv = false;
        }
        elseif ($length === 1) {
            $this->first_name = $this->last_name = $split_name[0];
        }
        else {
            $this->first_name = $split_name[0];
            $this->last_name = $split_name[1];
        }
        return $rv;
    }
}
class OrganizationBooks extends Books {
    public $name;
    public function __construct($name=null) {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
}
?>