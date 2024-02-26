<?php

class AddNamesProc {
    public function addClearNames() {
        if (isset($_POST['addName']) && !empty($_POST['nameInput'])) {
            $name = trim($_POST['nameInput']);
            $nameParts = explode(' ', $name);
            if (count($nameParts) == 2) {
                $_SESSION['namesList'][] = "{$nameParts[1]}, {$nameParts[0]}";
            }
        } elseif (isset($_POST['clearNames'])) {
            $_SESSION['namesList'] = [];
        }
        asort($_SESSION['namesList']);
        return implode("\n", $_SESSION['namesList']);
    }
}
