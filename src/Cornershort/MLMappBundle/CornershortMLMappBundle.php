<?php

namespace Cornershort\MLMappBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CornershortMLMappBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
