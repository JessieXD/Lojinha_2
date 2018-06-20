<?php

    session_start();
    session_destroy();
    header("Location: app/controladores/categorias.php");