<?php
namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class ExtendedPolicies extends Basic
{
    public function configure()
    {
        parent::configure();
        $this->addDirective(Directive::STYLE, 'fonts.googleapis.com');
        $this->addDirective(Directive::STYLE, 'cdn.jsdelivr.net');
        $this->addDirective(Directive::STYLE, 'kit.fontawesome.com');
        $this->addDirective(Directive::SCRIPT, 'kit.fontawesome.com');
        $this->addDirective(Directive::DEFAULT, 'fonts.gstatic.com');
        $this->addDirective(Directive::CONNECT, 'ka-f.fontawesome.com');
        $this->addDirective(Directive::DEFAULT, 'cdn.jsdelivr.net');
        // $this->addDirective(Directive::SCRIPT, 'nonce-".Vite::cspNonce()."');
    }
}