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
        <?php
            include_once 'nav.php';
        ?>


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

    </script>


    <section class="home">
        <div class="text">Developers</div>
        <div class="text" style="text-align: justify;"><p>OJT Intern: Edward Magdaraog</p></div>

    <!-- <nav class="large-3 medium-4 columns" id="actions-sidebar" style="float:right;">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Create New Product'), ['action' => 'add']) ?> </li>
            </ul>
        </nav> -->

    <!-- <div class="create-class">  
            <?= $this->Html->link(__('New Product'), ['action' => 'add']) ?>
        </div> -->

        
    </section>

</body>
</html>
