<?php
namespace Apsg\Pdfable;

abstract class Pdfable
{
    protected string $view;

    public abstract function build();

    public function view(string $name) : self
    {
        $this->view = $name;

        return $this;
    }
}
