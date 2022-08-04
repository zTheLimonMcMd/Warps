<?php

declare(strict_types = 1);

namespace zTheLimonMc\Warps\libs;

use pocketmine\plugin\PluginBase;

class FormAPI extends PluginBase{

    
  public function createSimpleForm(?callable $function = null) : SimpleForm {
     return new SimpleForm($function);
    }
}
