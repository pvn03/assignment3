<?php
//main class
abstract class Books {
    abstract public function get_name();
    abstract public function set_name($name);
    public $Book_name;
    //first magic function
    public function __set($name, $value)
    {
        echo "Setting Name to '$value'\n";
        $this->data[$name] = $value;
    }
    //second magic function
    public function __toString() {
        $s = "" . $this->get_name();
        if ($this->Book_name) {
            if (count($s) > 0) {
                $s .= ": ";
            }
            else {
                $s .= "Someone's Phone Number: ";
            }
            $s .= $this->Book_name;
        }
        return $s;
    }

}
?>
