<?php

use Mavimo\Sculpin\Bundle\RedirectBundle\SculpinRedirectBundle;
use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;
use Vrkansagara\Blog\CompressBundle\SculpinCompressBundle;
class SculpinKernel extends AbstractKernel
{
    protected function getAdditionalSculpinBundles(): array
    {
        return [
            SculpinRedirectBundle::class,
            SculpinCompressBundle::class,
        ];
    }
}
