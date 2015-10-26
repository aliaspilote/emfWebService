<?php

namespace emfdb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class emfdbUserBundle extends Bundle
{
   public function  getParent()
    {
        return'FOSUserBundle';
    }

}
