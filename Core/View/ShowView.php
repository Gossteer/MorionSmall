<?php

namespace Core\View;

use Core\Interfaces\iView;

class ShowView implements iView
{
    public function openPages(string $pathviews)
    {
        return include('./Views/' . $pathviews . '.html');
    }
}
?>