<?php
require_once "vendor/autoload.php";
use App\classes\Calculator;
use App\classes\Series;


include "pages/include/header.php";
if("home" == $_GET['page']){
    include "pages/home.php";
}
elseif("calculator1" == $_GET['page']){
    if(isset($_POST['submit'])){
        $obj = new Calculator($_POST);
    }
    include "pages/calculator-1.php";
}
elseif("calculator2" == $_GET['page']){
    if(isset($_POST['operator'])){
        $obj = new Calculator($_POST);
    }
    include "pages/calculator-2.php";
}
elseif("series" == $_GET['page']){
    if(isset($_POST['submit'])){
        $obj = new Series($_POST);
    }
    include "pages/series.php";
}
else{
    echo "No page detect";
}
include "pages/include/footer.php";

