<header>
    
    

    <script type="text/javascript" src="<?php echo e(URL::asset('js/sticky.js')); ?>"></script>


    <link rel="stylesheet" href="<?php echo e(URL::asset('/css/navigationbar.css')); ?>">

    <div class="logo">
        
        <a href="/">
            <img src="images/lib.png"   alt="" width="301" height="86" class="thumbs" />
        </a>
    </div>
    <div class="topnav">
        <h2 class="company">Company name</h2>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="<?php echo e(route('logout')); ?>">LOGOUT</a></li>

            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="mmain">
        <?php echo $__env->yieldContent('allContent'); ?>
    </div>
</main>