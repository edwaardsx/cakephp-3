<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ProductUnitOfMeasure $productUnitOfMeasure
 */

 use Cake\ORM\TableRegistry;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="../css/stylesheet" href="style.css">
    

    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    

</head>

<body>

        <?php
            include_once 'nav.php';
        ?>

    <script>
        const body = document.querySelector('body'),
        sidebar = body.querySelector('nav'),
        toggle = body.querySelector(".toggle"),
        modeSwitch = body.querySelector(".toggle-switch"),
        modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click" , () =>{
            sidebar.classList.toggle("close");
        })

    </script>

    </nav>


    <section class="home">
    <div class="text">Add Units Of Measure</div>
        <div class="productUnitOfMeasures form large-9 medium-8 columns content">
            <?= $this->Form->create($products2) ?>
            <fieldset>
                <?php
                    echo $this->Form->input('product_code',['type'=>'select','options'=>$dropdownvalue, 'empty'=>'-Select Product Codes-']);
                    echo $this->Form->input('unit_of_measure',['type'=>'select','options'=>$categdropdown, 'empty'=>'-Select Units of Measure-']);
                    echo $this->Form->control('price');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Create')) ?>
            <?= $this->Form->end() ?>
        </div>
    </section>

</body>
</html>


