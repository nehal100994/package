<?php

namespace Nehal\Package;

class PackageClass
{
    public function render()
    {
        return $this->getTemplate();
    }

    private function getTemplate()
    {
        return "<html><body><h1>Hello, World!</h1></body></html>";
    }
}
