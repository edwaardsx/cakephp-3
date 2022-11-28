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

    <section class="home">
        <div class="text">Hello World</div>
        <div class="text" style="text-align: justify;"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quasi modi id, molestias vitae optio soluta a consequatur facere quas dignissimos eligendi, amet blanditiis labore. Sint repudiandae eaque dicta eos doloremque nihil sit ipsam. Distinctio nostrum voluptatem, laudantium consequatur ad qui aliquid delectus repudiandae magni molestiae accusantium ratione esse praesentium a quasi iure eius illum corporis sit explicabo enim magnam nam! Ut minima dolorum cum mollitia suscipit quod aliquid, beatae, provident ducimus maxime quas deleniti accusamus eos voluptas perferendis eligendi dolorem nobis nisi neque! Delectus id suscipit ipsam sed nihil cumque, velit quibusdam nemo enim ullam fugiat at et eveniet! Cupiditate assumenda facilis quam ducimus alias hic debitis eius soluta, ad consectetur ab voluptatibus quidem impedit odio minima animi nobis libero illo rerum atque? Magni suscipit placeat aperiam est quae possimus, numquam dolores, fugiat amet consequuntur deleniti illo ut non ad distinctio ea, nesciunt quod explicabo eveniet at incidunt sapiente? Accusamus, sit numquam! Quisquam, nobis sint aut sapiente cupiditate eos sequi numquam debitis laborum eaque tempore, veniam reiciendis velit earum odit nesciunt dolores cum praesentium maxime libero porro. Nulla numquam cupiditate aliquid, ipsa adipisci quasi eligendi sit explicabo sed alias sapiente architecto id molestias! Optio, quidem eum. Suscipit, pariatur quisquam modi, nulla corporis distinctio, voluptates soluta exercitationem iste temporibus culpa veniam tempore. Repudiandae dolores aut atque, excepturi praesentium quasi accusantium natus laboriosam cum eveniet nulla beatae accusamus asperiores vel tenetur iste laudantium rem, maxime odit placeat eaque minima! Natus voluptate distinctio vitae magnam deserunt. Nobis soluta sed eaque itaque nam.</p></div>
    </section>
</body>
</html>
