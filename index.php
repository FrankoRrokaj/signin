<?php
if(!session_id()){
    session_start();
}
require_once './Users.php';
$user = new Users();
if(!$user->isLoggedIn ()){
    header ("location:/signing.php");
}
?>
<html>

    <head>
        <title>detyra e pare</title>
        <link rel="stylesheet" type="text/css" href="detyra e pare.css">
    </head>
      <body>
        <div class="menu">
           <ul>
            <li class="home"><a href="#">Home</a></li>
            <li><a href="#">Aktivitete</a></li>
            <li><a href="#">Informacion</a></li>
            <li><a href="#">Contact</a></li>
            <li><a class="me-3 py-2 text-dark text-decoration-none" href="/productShow.php">Products</a></li>
            <li><a class="me-3 py-2 text-dark text-decoration-none position-relative" href="/checkout.php">
                Card
                <?php
                    require_once "./Cart.php";
                    $cart = new Cart();
                    $nrOfProducts = $cart->getNrOfProducts ();
                    if($nrOfProducts>0){
                        ?>
                <span class="badge rounded-pill bg-danger"><?php echo $nrOfProducts; ?> </span>
                <?php
                    }
                ?>
            </a></li>
            <?php
                require_once "./Users.php";
                $user = new Users();
                if($user->isLoggedIn ()){
                    ?>
                   
                    <li><a class="me-3 py-2 text-dark text-decoration-none" href="/logout.php"><strong>LOGOUT</strong></a></li>
            <?php
                }
            ?>
           </ul>
        </div>
        <div class="main">
            <div class="sidebar">
                <ul>
                <li><a href="https://www.instagram.com/?hl=en"><img src="instagram.phhh.jpg" alt="ing"></a></li>
                <li><a href=https://www.facebook.com><img src="facebook.pngg.png" alt="fcb"></a></li>
                <li><a href=https://www.google.com/gmail/about><img src="gmail.logo.png" alt="gmail"></a></li>
                </ul>
            </div>
        </div>

    </body>
</html>