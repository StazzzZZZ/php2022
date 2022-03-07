<?php 
if($_POST){
    if($_POST["name"]!="" && $_POST["review"]!=""){
        $name = $_POST["name"];
        $review = $_POST["review"];
        switch($_POST["func"]){
            case '/all':addReviews($name, $review);break;
            case '/time':onlyTime($name, $review);break;
            case '/name':onlyName($name, $review);break;
            case '/review':onlyReview($name, $review);break;
            default: addReviews($name, $review);break;
        }
        header('location:reviews.php');
        //eee
    }
}else{
    header('location:reviews.php');

}
function addReviews($name, $review){
    $file = fopen('reviews.data','a+');
    $time = date('d-m-Y h:i', time());

    $text = "time: $time, name: $name, Review: $review ;\n"; 
    

    echo fwrite($file,$text);
    fclose($file);
    return true;

}
function onlyName($name, $review){
    $file = fopen('reviews.data','a+');
    $text = "name: $name;\n"; 
    echo fwrite($file,$text);
    fclose($file);
    return true;

}
function onlyTime($name, $review){
    $file = fopen('reviews.data','a+');
    $time = date('d-m-Y h:i', time());
    $text = "time: $time ;\n"; 
    echo fwrite($file,$text);
    fclose($file);
    return true;

}
function onlyReview($name, $review){
    $file = fopen('reviews.data','a+');
    $text = "Review: $review ;\n"; 
    echo fwrite($file,$text);
    fclose($file);
    return true;
    // test
}

?>
