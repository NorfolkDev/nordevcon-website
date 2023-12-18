<?php

namespace App\Support;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic;

class CSPolicy extends Basic
{
    public function configure()
    {
        parent::configure();

        $this->addDirective(Directive::IMG, 'sessionize.com cache.sessionize.com');
        $this->addDirective(Directive::IMG, 'norfolkdevelopers.s3.eu-west-2.amazonaws.com');
        $this->addDirective(Directive::FORM_ACTION, 'https://dev.us16.list-manage.com');
    }
}
