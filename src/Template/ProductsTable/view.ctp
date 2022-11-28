<?php
    /**
     * @var \App\View\AppView $this
     * @var \App\Model\Entity\Product $product
     */
    use Cake\Routing\RouteBuilder;
    use Cake\Routing\Router;
    use Cake\Routing\Route\DashedRoute;
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
                    <th scope="row"><?= __('Id') ?></th>
                    <th scope="row"><?= __('Product Code') ?></th>
                    <th scope="row"><?= __('Product Name') ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                    <td><?= h($product->product_code) ?></td>
                    <td><?= h($product->product_name) ?></td>
                </tr>
            </tbody>
        </table>


        <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('unit_of_measure') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productUnitOfMeasures as $productUnitOfMeasure): ?>
                        <tr>
                            <td><?= $this->Number->format($productUnitOfMeasure->id) ?></td>
                            <td><?= h($productUnitOfMeasure->product_code) ?></td>
                            <td><?= h($productUnitOfMeasure->unit_of_measure) ?></td>
                            <td>₱ <?= $this->Number->format($productUnitOfMeasure->price) ?></td>
                            <td class="actions">

                            <?= $this->Html->link(__('View'), ['action' => 'viewuom', $productUnitOfMeasure->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edituom', $productUnitOfMeasure->id]) ?>
                                <?= $this->Html->link(__('Delete'), ['action' => 'deleteuomrecord', $productUnitOfMeasure->id]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <button class='button2' name="editbtn" onClick="javascipt:window.location.href='<?php echo Router::url(array('controller'=>'ProductsTable','action'=>'adduom', $product->product_code)) ?>'">Add Unit of Measure</button>
            </div>


    </div>

    
    </section>
    
</body>
</html>