<?php

$sqlui = "SELECT * from user ";

$resultui = mysqli_query($con, $sqlui);
$tempui = mysqli_fetch_assoc($resultui);


?>


<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0 topbar_cont">
    <a href="javascript:void(0)" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>

    <div class="navbar-nav align-items-center ms-auto">

        <div class="d-flex align-items-center py-2">
            <!-- <a href="" class="dropdown-item" onclick="event.preventDefault();   document.getElementById('logout-form').submit();"> -->
            <h5 class="text-primary">
                Super Admin
            </h5>
            <div class="text-primary">
                <a href="setting.php">
                    <i class="fa fa-cog fa-2x" aria-hidden="true"></i></a>
            </div>


            <div class="dropdown" style='height:36px; width:36px;'>
                <a style='height:36px; width:36px;' class="btn btn-secondary" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img style='margin-left:-13px; margin-top:-8px; height:36px; width:36px; border-radius:30px;'
                        src="./img/<?php echo $tempui['image']; ?>" alt="">
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1" style='margin:0;'>
                    <li><a class="dropdown-item" href="account.php">Account</a></li>
                    <li>
                        <hr>
                    </li>
                    <li>
                        <a href='signin.php' type="submit" class="dropdown-item">Log out</a>
                    </li>
                </ul>
            </div>

            <!-- </a> -->
        </div>
    </div>
</nav>