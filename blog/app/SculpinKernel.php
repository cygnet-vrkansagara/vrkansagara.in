<?php

use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;
use Vrkansagara\Blog\BlogBundle\SculpinBlogBundle;
use Mavimo\Sculpin\Bundle\RedirectBundle\SculpinRedirectBundle;


class SculpinKernel extends AbstractKernel
{
    protected function getAdditionalSculpinBundles(): array
    {
        return [
            SculpinBlogBundle::class,
            SculpinRedirectBundle::class
        ];
    }
}