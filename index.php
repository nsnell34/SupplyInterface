<html>
<body>

<?php

error_reporting(-1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL ^ E_WARNING ^ E_DEPRECATED);
ini_set("session.gc_maxlifetime", "180000");

ignore_user_abort(1);
set_time_limit(1800);


class GUI {

    public function display(){
        if ($_POST['act'] == "View Products"){
            $this->viewProducts();
        } elseif ($_POST['act'] == "View History"){
            $this->viewHistory();
        } 
        
    }

    public function viewProducts(){
        echo("

        <table>
            <tr>
                <th>Species</th>
                <th>Location</th>
                <th>Weight</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>Fish</td>
                <td>Example Location</td>
                <td>lbs</td>
                <td>quantity</td>
            </tr>
        </table>
        ");

    }


    public function viewHistory(){
        echo("History Page");
    }
}

$gui = new GUI();   
$gui->display();    

?>

</body>
</html>


