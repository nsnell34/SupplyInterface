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
        } elseif ($_POST['act'] == "Return"){
            $this->return();
        } 

        
    }

    public function viewProducts(){
        echo("
        <link href='table.css' rel='stylesheet'>
        <p>Products</p>
        <div></div>
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
        <div></div>
        ");

    }


    public function viewHistory(){
        echo("<link href='table.css' rel='stylesheet'>");
        echo("History Page");
    }

    public function return(){
        header("Location: index.html");
    }
}

$gui = new GUI();   
$gui->display();    

?>
<form method="post" action="index.php">
    <input type="submit" name="act" value="Return">
</form>


</body>
</html>


