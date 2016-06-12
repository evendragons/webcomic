<?php

namespace Bolt\Extension\EvenDragons\TwigPHPBits;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}

