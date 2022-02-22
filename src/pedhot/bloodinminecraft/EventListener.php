<?php

namespace pedhot\bloodinminecraft;

use pocketmine\block\VanillaBlocks;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\world\particle\BlockBreakParticle;

class EventListener implements Listener
{

    public function __construct(BloodInMinecraft $plugin)
    {
        Server::getInstance()->getPluginManager()->registerEvents($this, $plugin);
    }

    public function onDamage(EntityDamageEvent $event)
    {
        $entity = $event->getEntity();
        $entity->getWorld()->addParticle($entity->getPosition()->asVector3(), new BlockBreakParticle(VanillaBlocks::REDSTONE()));
    }

}