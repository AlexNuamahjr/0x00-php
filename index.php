<?php
@include("./functions.php");

if ($uri === "/"){
    @include("./controllers/index.php");
}elseif($uri === "/about"){
    @include("./controllers/about.php");
}elseif ($uri === "/contact"){
    @include("./controllers/contact.php");
}