<?php

use Baobab\Helper\Views;
use Balsa\Controllers\DefaultController;

Views::render((new DefaultController())->index());