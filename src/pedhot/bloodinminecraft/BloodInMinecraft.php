<?php

namespace pedhot\bloodinminecraft;

use pocketmine\plugin\PluginBase;

class BloodInMinecraft extends PluginBase
{

    protected function onEnable(): void
    {
        new EventListener($this);
    }

}