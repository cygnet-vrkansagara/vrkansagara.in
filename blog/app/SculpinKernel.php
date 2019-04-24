<?php
use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;
use Vrkansagara\Blog\BlogBundle\SculpinBlogBundle;
class SculpinKernel extends AbstractKernel
{
    protected function getAdditionalSculpinBundles(): array
    {
        return [
            SculpinBlogBundle::class

        ];
    }
}