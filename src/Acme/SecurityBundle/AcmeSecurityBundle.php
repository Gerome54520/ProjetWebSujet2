<?php

namespace Acme\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeSecurityBundle extends Bundle
{
public function getParent()
  {
    return 'FOSUserBundle';
  }
}
