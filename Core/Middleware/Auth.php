<?php

class Auth {
    public function handle() {
        if(! $_SESSION['user'] ?? false) {
            header('location: /pfp/');
            die();
        }
    }
}