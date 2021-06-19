<?php

namespace Application\StartingPointPackage\ProfessionalWebsite;

use Concrete\Core\Application\Application;
use Concrete\Core\Backup\ContentImporter;
use Concrete\Core\Package\Routine\AttachModeInstallRoutine;
use Concrete\Core\Package\StartingPointInstallRoutine;
use Concrete\Core\Package\StartingPointPackage;

class Controller extends StartingPointPackage
{
    protected $pkgHandle = 'professional_website';

    public function getPackageName()
    {
        return t("Professional Website");
    }

    public function getPackageDescription()
    {
        return t("Starting point package to install a professional website.");
    }

}
