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
                    <li><a href="/page=judicaire">Judiciaire</a></li>
                    <li><a href="/?page=help_page">Aides</a></li>
                    <li><a href="/?page=info">Infos</a></li>
                    <li><a href="/?page=description">Description</a></li>
                    <li><a href="/?page=settings">Settings</a></li>
                </ul>
            </li>
            <li id="divheadertwo" class="titlenumerie"><a href="/?page=accueil">Numérie</a></li>


            <li id="divheadertwo" class="menu-deroulant">
                <a href="/?page=profile">Profil</a>
                <ul class="sous-menu">
                    <li><a href="/?page=account_verification">Vérifier compte</a></li>
                    <li><a href="/?page=operation_verification">Vérifier opérations</a></li>
                    <li><a href="/?page=operations">Opérations</a></li>
                    <li><a href="/actions/logout.php">Logout</a></li>
                </ul>
            </li>

        </ul>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">

            <?php if ($user === false) { ?>

                <li id="divheadertwo"><a href="/?page=login">Login</a></li>
                <li id="divheadertwo"><a href="/?page=signup">SignUp</a></li>

            <?php } else if ($user->role >= 1000) { ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                <li><a href="/?page=account_verification" class="nav-link px-2 link-dark">Vérifier compte</a></li>
                <li><a href="/?page=operation_verification" class="nav-link px-2 link-dark">Vérifier opération</a></li>
                <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>

            <?php } else if ($user->role > 200) { ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>
                <li><a href="/?page=operations" class="nav-link px-2 link-dark">Opérations</a></li>

            <?php } else if ($user->role > 40) { ?>

                <li><a href="/?page=judiciaire" class="nav-link px-2 link-dark">Judiciaire</a></li>


            <?php } else if ($user->role > 30) { ?>

                <li><a href="/?page=etudes_file.php" class="nav-link px-2 link-dark">Etudes</a></li>

            <?php } else if ($user->role > 20) { ?>

                <li><a href="/?page=soins_file" class="nav-link px-2 link-dark">Soins</a></li>

            <?php } else if ($user->role > 10) { ?>

                <li><a href="/?page=account_verification.php" class="nav-link px-2 link-dark">Vérification</a></li>

            <?php } else if ($user->role > 1) { ?>

                <li><a href="/?page=profile" class="nav-link px-2 link-dark">Profil</a></li>

            <?php } else if ($user->role > 0) { ?>



            <?php } else { ?>

                <li><a href="/actions/logout.php" class="nav-link px-2 link-dark">Logout</a></li>

            <?php    } ?>

        </ul>

        <?php if ($user === false) { ?>



        <?php    } ?>

    </nav>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>
        </header>
</header>