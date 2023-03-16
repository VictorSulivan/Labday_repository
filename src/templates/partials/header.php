<header>
    <nav>
        <ul>
            <li id="divheadertwo" class="menu-deroulant">
                <a href="#">Menu</a>
                <ul class="sous-menu">
                    <li><a href="/?page=procedures">Procédures</a></li>
                    <li><a href="/?page=admin_file">Administratif</a></li>
                    <li><a href="/?page=soins_file">Soins</a></li>
                    <li><a href="/?page=etudes_file">Études</a></li>
                    <li><a href="/?page=help_page">Aides</a></li>
                    <li><a href="/?page=info">Infos</a></li>
                    <li><a href="/?page=description">Description</a></li>
                    <li><a href="/?page=settings">Settings</a></li>
                </ul>
            </li>

            <li id="divheadertwo" class="titlenumerie">Numérie</li>
            <li id="divheadertwo"><a href="/?page=login">Login</a></li>
            <li id="divheadertwo"><a href="/?page=signup">SignUp</a></li>
            <li><a href="/../../../www/actions/logout.php">Logout</a></li>
            <li id="divheadertwo" ><a href="/?page=profile">Profil</a></li>

        </ul>



        <!--<div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

                <?php if ($user === false) { ?>

                    <li><a href="/?page=home" class="nav-link px-2 link-secondary">Home</a></li>

                <?php } else if ($user->role >= 200) { ?>

                    <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                    <li><a href="/?page=account_verification" class="nav-link px-2 link-dark">Vérifier compte</a></li>
                    <li><a href="/?page=operation_verification" class="nav-link px-2 link-dark">Vérifier opération</a></li>
                    <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>
                    <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

                <?php } else if ($user->role > 1){ ?>

                    <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                    <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>
                    <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

                <?php } else if ($user->role > 0){ ?>

                    <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                    <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

                <?php } else { ?>

                    <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

                <?php    } ?>

        </ul>

        <?php if ($user === false) { ?>

            <div class="col-md-3 text-end">
                <a href="/?page=login"><button type="button" class="btn btn-outline-primary me-2">Login</button></a>
                <a href="/?page=signup"><button type="button" class="btn btn-primary">Sign-up</button></a>
            </div>
        <?php    } ?>

        </header>-->
    </nav>
  
</header>
 