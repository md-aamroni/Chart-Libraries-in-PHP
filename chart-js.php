<?php

require_once './app/Http/Utilities/View.php';

View::loadLayouts('top');
View::loadContent('chart-js');
View::loadLayouts('tail');
