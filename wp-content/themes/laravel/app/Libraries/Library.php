<?php
namespace App\Libraries;

final class Library
{
    public function __construct() {
        $this->addMenu();
    }

    public function addMenu()
    {
        add_action("admin_menu", "addMenu");

        function addMenu() {
            add_menu_page("My New Menu", "My New Menu", "edit_posts",
                "mynewmenu", "displayPage", null, 1);
        }
    }
}
