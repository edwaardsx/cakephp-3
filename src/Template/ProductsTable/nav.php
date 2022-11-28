<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <?php echo $this->Html->image('cakephp-3.png'); ?>
                    <!-- <img src="../img/cakephp-3.png" alt=""> -->
                </span>

                <div class="text logo-text">
                <span class="name">CakePHP</span>
                <span class="profession">CRUD</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>


<div class="menu-bar">
    <div class="menu">

        <ul class="menu-links">
            <li class="nav-link">
                <a href="<?= \Cake\Routing\Router::url(['controller' => 'ProductsTable', 'action' => 'home']) ?>">
                    <i class='bx bx-home-alt icon test' ></i>
                    <span class="text nav-text">Home</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="<?= \Cake\Routing\Router::url(['controller' => 'ProductsTable', 'action' => 'add']) ?>">
                    <i class='bx bx-plus-circle icon test'></i>
                    <span class="text nav-text">Create</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="<?= \Cake\Routing\Router::url(['controller' => 'ProductsTable', 'action' => 'addcategs']) ?>">
                    <i class='bx bx-plus-circle icon test'></i>
                    <span class="text nav-text">UOM</span>
                </a>
            </li>

            <li class="nav-link">
                <a href="<?= \Cake\Routing\Router::url(['controller' => 'ProductsTable', 'action' => 'tablelist']) ?>">
                    <i class='bx bx-list-ol icon test' id='list-ol'></i>
                    <span class="text nav-text">List</span>
                </a>
            </li>

        </ul>
    </div>

    <div class="bottom-content">
        <li class="nav-link bottomnav">
            <a href="<?= \Cake\Routing\Router::url(['controller' => 'ProductsTable', 'action' => 'devs']) ?>">
                <i class='bx bx-expand-horizontal icon test' id='dev'></i>
                <span class="text nav-text">Developers</span>
            </a>
        </li>

            </div>

</div>

</nav>