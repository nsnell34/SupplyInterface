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
        } elseif ($_POST['act'] == "Manage Orders"){
            $this->manageOrders();
        } elseif ($_POST['act'] == "Manage Suppliers"){
            $this->manageSuppliers();
        } elseif ($_POST['act'] == "Shipping & Logistics"){
            $this->shippingLogistics();
        } elseif ($_POST['act'] == "Reporting & Analytics"){
            $this->reportingAnalytics();
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
        <br>
        ");

    }


    public function viewHistory(){
        echo("<link href='table.css' rel='stylesheet'>");
        echo("History Page");
        echo("<br>");
    }

    public function manageOrders(){
        echo("<link href='table.css' rel='stylesheet'>");
        echo("Manage Orders Page");
        echo("<br>");
    }

    public function manageSuppliers(){
        echo("<link href='table.css' rel='stylesheet'>");
        echo("Manage Suppliers Page");
        echo("<br>");
    }
    public function shippingLogistics(){    
        echo("<link href='table.css' rel='stylesheet'>");
        echo("Shipping & Logistics Page");
        echo("<br>");
    }
    public function reportingAnalytics(){
        echo("<link href='table.css' rel='stylesheet'>");
        echo("Reporting & Analytics Page");
        echo("<br>");
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


