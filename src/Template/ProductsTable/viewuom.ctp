<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


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

<section class="home">
    <div class="text">Products View</div>

    <div class="products view large-9 medium-8 columns content">
    
        <table >
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('unit_of_measure') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $this->Number->format($ProductsUnitOfMeasure->id) ?></td>
                    <td><?= h($ProductsUnitOfMeasure->product_code) ?></td>
                    <td><?= h($ProductsUnitOfMeasure->unit_of_measure) ?></td>
                    <td><?= h($ProductsUnitOfMeasure->price) ?></td>
                </tr>
            </tbody>
        </table>


    </div>

</section>

</body>
</html>