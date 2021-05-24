<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo SITENAME;?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo URLROOT?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/pages/about">About</a>
                </li>    
                <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/pages/events">Events</a>
                </li>    
            </ul>
    
            <ul class="navbar-nav ml-auto">
            <?php if(isset($_SESSION['user_id'])) : ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Welcome <?php echo $_SESSION['name'];?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo URLROOT?>/users/logout">Logout</a>
                </li>
            <?php else : ?>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo URLROOT?>/users/register">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT?>/users/login">Login</a>
                </li>    
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?php echo URLROOT?>/news/add">News</a>
                </li>

            <?php endif; ?>
            </ul>
            </div>
        </div>
    </div>
</nav>