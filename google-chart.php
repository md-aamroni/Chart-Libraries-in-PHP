<?php

require_once './app/Http/Utilities/View.php';

View::loadLayouts('top');
View::loadContent('google-chart');
View::loadLayouts('tail');
