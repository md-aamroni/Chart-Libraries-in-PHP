<?php

require_once './app/Http/Utilities/View.php';

View::loadLayouts('top');
View::loadContent('home');
View::loadLayouts('tail');
