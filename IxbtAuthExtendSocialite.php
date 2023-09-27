<?php

namespace Mpanius\IxbtAuthOauth2;

use SocialiteProviders\Manager\SocialiteWasCalled;

class IxbtAuthExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param  \SocialiteProviders\Manager\SocialiteWasCalled  $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('ixbtauth', Provider::class);
    }
}
