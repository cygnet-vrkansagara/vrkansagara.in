<?php

<<<<<<< HEAD
use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;
use Vrkansagara\Blog\BlogBundle\SculpinBlogBundle;
use Mavimo\Sculpin\Bundle\RedirectBundle\SculpinRedirectBundle;


=======
use Mavimo\Sculpin\Bundle\RedirectBundle\SculpinRedirectBundle;
use Sculpin\Bundle\SculpinBundle\HttpKernel\AbstractKernel;
use Vrkansagara\Blog\CompressBundle\SculpinCompressBundle;
>>>>>>> upstream/develop
class SculpinKernel extends AbstractKernel
{
    protected function getAdditionalSculpinBundles(): array
    {
        return [
<<<<<<< HEAD
            SculpinBlogBundle::class,
            SculpinRedirectBundle::class
        ];
    }
}
=======
            SculpinRedirectBundle::class,
            SculpinCompressBundle::class,
        ];
    }
}
>>>>>>> upstream/develop
