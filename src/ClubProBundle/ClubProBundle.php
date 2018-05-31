<?php

namespace ClubProBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ClubProBundle extends Bundle
{
    
    public function getContainerExtension()
    {
        return new \ClubProBundle\ClubProBundleExtension();
    }
}
