<?php

function _t($txt,$lang = 'km')
{
    return \App\Helpers\Glb::translate($txt,$lang);
}