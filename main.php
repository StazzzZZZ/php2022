<?php 
    session_start();
    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"] = "rus";
    }

    require_once($_SESSION["lang"] . ".php");

?>



<?php 

if(isset($_GET["page"])){
    if($_GET["page"] == "about"){
        $content = "
        <h1>{$language['about']}</h1>
        ";

    }
    if($_GET["page"] == "contacts"){
        $content = "
        <h1>{$language['contacts']}</h1>
        ";

    }
    if($_GET["page"] == "services"){
        $content = "
        <h1>{$language['services']}</h1>
        ";
    }
}else{
    $content = "
    <h1>{$language['about']}</h1>
        ";
}

?>


<?php require_once('header.php')?>
<body>
    <?php include_once('navigation.php')?>
    <div class="container">
<?= $content?>
    </div>
</body>
</html>
