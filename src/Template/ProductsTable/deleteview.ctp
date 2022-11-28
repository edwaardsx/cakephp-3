<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductsTable $ProductsTable
 */


use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


?>

<!DOCTYPE html>
  <!-- Coding by CodingLab | www.codinglabweb.com -->
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="../css/stylesheet" href="style.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <!--<title>Dashboard Sidebar Menu</title>--> 

    
</head>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">CakePHP</span>
                    <!-- <span class="profession">Web developer</span> -->
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <?php
        
            include_once 'nav.php';

        ?>

    </nav>

    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        //searchBtn = body.querySelector(".search-box"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })

        // searchBtn.addEventListener("click" , () =>{
        //     sidebar.classList.remove("close");
        // })

        modeSwitch.addEventListener("click" , () =>{
            body.classList.toggle("dark");
            
            if(body.classList.contains("dark")){
                modeText.innerText = "Light mode";
            }else{
                modeText.innerText = "Dark mode";
                
            }
        });
    </script>

    <section class="home">
        <div class="text">Delete Products</div>

        <div class='delete-content'>
            <?php echo $this->Form->create('Post', array('action' => 'deleterecord')) ?>
             
            <fieldset>
                <?php
                    echo $this->Form->control('products',['type'=>'select','options'=>$productcode, 'name'=>'productdd', 'empty'=>'-Select Product Codes-']);
                ?>
            </fieldset>
            <!-- <button class='button2' name="delbtn" onClick="javascipt:window.location.href='<?php echo Router::url(array('controller'=>'Products','action'=>'deleterecord', 'TST11')) ?>'">Delete</button> -->
         
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </section>

</body>
</html>
