<?php
    use Core\Router as Router;

    /**
     * Register your routes here
     */

    Router::get('', '/pages/index/view.php', 'Hello there!');