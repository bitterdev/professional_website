<?php

namespace Application\StartingPointPackage\ProfessionalWebsite;

use Concrete\Core\Package\StartingPointPackage;

class Controller extends StartingPointPackage
{
    protected $pkgHandle = 'professional_website';

    public function getPackageName(): string
    {
        return t("Professional Website");
    }

    public function getPackageDescription(): string
    {
        return t("Starting point package to install a professional website.");
    }

}
