<?php

require_once './app/Http/Utilities/View.php';

View::loadLayouts('top');
View::loadContent('index');
View::loadLayouts('tail');
