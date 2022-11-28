<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUnitOfMeasure $productUnitOfMeasure
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="text">Edit Unit Of Measure</div>

        <div class="productUnitOfMeasures form large-9 medium-8 columns content">
            <?= $this->Form->create($product3) ?>
            <fieldset>
                
                <?php
                    echo $this->Form->control('product_code', array('value'=>$product3->product_code,'disabled'));
                    echo $this->Form->control('unit_of_measure');
                    echo $this->Form->control('price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </section>
    
</body>
</html>




