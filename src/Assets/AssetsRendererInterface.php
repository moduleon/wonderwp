<?php
/**
 * Created by PhpStorm.
 * User: jeremydesvaux
 * Date: 24/06/2016
 * Time: 12:38
 */

namespace WonderWp\Assets;

interface AssetsRendererInterface{

    public function renderStyles();

    public function renderScripts();

}