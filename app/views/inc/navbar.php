<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


<div >


    <nav class="navbar navbar-expand-lg bg-body-tertiary " style="background-color:#73bf8f !important;">
        <div class="container-fluid" >
            <a class="navbar-brand" href="<?= URLROOT ?>/pages/home">
                <img class="d-inline" src="<?= URLROOT; ?>/img/favicon_Cureco.png" alt="" width="40px" srcset="">
                <!-- <i class="fas fa-3x fa-tachometer-alt tm-site-icon"></i> -->
                <p class="tm-site-title mb-0 pharmacyTitle d-inline" style="color:rgb(17, 121, 91);" ;>CureCo</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse position-absolute top-1 end-0 " id="navbarNav">
               
                    <ul class="navbar-nav ">

                        <ul class="navbar-nav ">
                            <?php if (isset($_SESSION['user_id'])) : ?>

                                <li class="nav-item active">

                                    <a style="color:rgb(17, 121, 91);" class="nav-link" href="<?= URLROOT ?>/products/index">Products Management</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item mr-l">
                                <a style="color:rgb(17, 121, 91);" class="nav-link" href="<?= URLROOT ?>/pages/home">home</a>
                            </li>
                            <?php if (isset($_SESSION['user_id'])) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a style="color:rgb(17, 121, 91);" class="nav-link d-flex" href="<?= URLROOT ?>/users/logout">
                                <i class="far fa-user mr-2 tm-logout-icon"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>
                            <?php if (!isset($_SESSION['user_id'])) : ?>

                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a style="color:rgb(17, 121, 91);" class="nav-link d-flex" href="<?= URLROOT ?>/users/login">
                                            <i class="far fa-user mr-2 tm-logout-icon"></i>
                                            <span>Login</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif; ?>

                        </ul>

                    </ul>
            </div>
        </div>
    </nav>


</div>




















<!-- 

<div class="row">
    <div class="col-12">
        <nav class="navbar navbar-expand-xl navbar-light" style="background-color: #73bf8f; ">
            <a class="navbar-brand" href="<?= URLROOT ?>/pages/home">
                <img class="d-inline" src="<?= URLROOT; ?>/img/favicon_Cureco.png" alt="" width="10%" srcset="">
                <h1 class="tm-site-title mb-0 pharmacyTitle d-inline" style="color:rgb(17, 121, 91);" ;>CureCo</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ">
                    <?php if (isset($_SESSION['user_id'])) : ?>

                        <li class="nav-item active">

                            <a style="color:cornsilk;" class="nav-link" href="<?= URLROOT ?>/products/index">Products Management</a>
                        </li>
                    <?php endif; ?>
                    <li class="nav-item mr-l">
                        <a style="color:cornsilk;" class="nav-link" href="<?= URLROOT ?>/pages/home">home</a>
                    </li>

                </ul>
                <?php if (isset($_SESSION['user_id'])) : ?>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a style="color:cornsilk;" class="nav-link d-flex" href="<?= URLROOT ?>/users/logout">
                                <i class="far fa-user mr-2 tm-logout-icon"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    </ul>

                    <?php if (!isset($_SESSION['user_id'])) : ?>

                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a style="color:cornsilk;" class="nav-link d-flex" href="<?= URLROOT ?>/users/login">
                                    <i class="far fa-user mr-2 tm-logout-icon"></i>
                                    <span>Login</span>
                                </a>
                            </li>
                        </ul>
                    <?php endif; ?>

            </div>
        </nav>

    </div>
</div> -->