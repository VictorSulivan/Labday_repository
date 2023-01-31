<?php

if (isset($_SESSION['success_message'])) {
    ?>
    <p class="alert alert-success" style="color:green;">
        <?= $_SESSION['success_message'] ?>
    </p>
    <?php
    unset($_SESSION['success_message']);
}