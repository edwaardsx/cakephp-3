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

    <section class="home">
        <div class="text">List of Products</div>
    </section>

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
        <div class="text">List of Products</div>

        <br>

    <!-- <nav class="large-3 medium-4 columns" id="actions-sidebar" style="float:right;">
            <ul class="side-nav">
                <li class="heading"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('Create New Product'), ['action' => 'add']) ?> </li>
            </ul>
        </nav> -->

    <!-- <div class="create-class">  
            <?= $this->Html->link(__('New Product'), ['action' => 'add']) ?>
        </div> -->

        <div class="read-class view-content">
            <!-- <h2>Read</h2> -->

        
            <!-- <table>

                <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Product Name</th>
                </tr>

                <?php
                    foreach ($viewData as $row) {
                        echo "<tr>";
                            echo "<td>" . $row->id . "</td>";
                            echo "<td>" . $row->product_code . "</td>";
                            echo "<td>" . $row->product_name . "</td>";
                            echo '<td class="actions">';
                                    $this->Html->link(__('View'), ['action' => 'view', $product->id]);
                                    $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]);
                                    $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]);
                            echo '</td>';
                        echo "</tr>";
                    }
                ?>
                
            </table> -->
            <div class="table-grid">
                
                    <table >
                        <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('product_name') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?= $this->Number->format($product->id) ?></td>
                                <td><?= h($product->product_code) ?></td>
                                <td><?= h($product->product_name) ?></td>
                                <td class="actions">

                                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id, $product->product_code]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                                    
                                    <?= $this->Html->link(__('Delete'), ['action' => 'deleterecord', $product->id, $product->product_code]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                
            
            

    
            
        
            <!-- <table>
                <tr>
                    <th>ID</th>
                    <th>Product Code</th>
                    <th>Unit of Measure</th>
                    <th>Price</th>
                </tr>
                <?php
                    foreach ($viewData2 as $row) {
                        echo "<tr>";
                            echo "<td>" . $row->id . "</td>";
                            echo "<td>" . $row->product_code . "</td>";
                            echo "<td>" . $row->unit_of_measure . "</td>";
                            echo "<td>₱" . $row->price . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table> -->

            <!-- <div class="table-wrapper" id="puom">
                <caption>
                    <h4>Products Unit Of Measure</h4>
                </caption>

                <br>

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
                            <td><?= $this->Number->format($productUnitOfMeasure->price) ?></td>
                            <td class="actions">

                            <?= $this->Html->link(__('View'), ['action' => 'view', $productUnitOfMeasure->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edituom', $productUnitOfMeasure->id]) ?>
                                <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productUnitOfMeasure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productUnitOfMeasure->id)]) ?> -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div> -->
            

            
        </div>
    </section>

</body>
</html>
