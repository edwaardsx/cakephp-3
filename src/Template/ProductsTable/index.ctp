<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 * @var \App\Model\Entity\Product $product
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content"> -->

    <h1>Create Read Update Delete</h1>
    <hr>

    <div class="read-class">

        <h1 class="title">Read</h1>

        <h3>Products</h3>

        <table>
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
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</div>
