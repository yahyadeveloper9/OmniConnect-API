<?php
namespace Omni;
class Omni {
    public static function make($provider) { return new $provider(); }
}
