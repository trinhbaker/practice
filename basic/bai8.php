<!DOCTYPE html>
<html>

<body>
    <?php
    class Fruit
    {
        public $name;
        public $color;
        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        // {
            
        // }
        // function set_name($name;
        // {
        //     $this->name = $name;
        // }
        // function set_color($color){
        //     $this->color = $color;
        // }
        function get_name()
        {
            return $this->name;
        }
        function get_color(){
            return $this->color;
        }
    }
    $apple = new Fruit('Apple', 'Xanh');
    // $green = new Fruit('Xanh');
    // $apple->set_name('Apple');
    // $green->set_color('Xanh');
    echo $apple->get_name();
    echo $apple->get_color();


    ?>
</body>

</html>