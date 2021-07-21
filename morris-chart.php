<?php

require_once './app/Http/Utilities/View.php';

View::loadLayouts('top');
View::loadContent('morris-chart');
View::loadLayouts('tail');
