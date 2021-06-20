<?php

namespace Application\StartingPointPackage\ProfessionalWebsite;

use Concrete\Core\Package\Package;
use Concrete\Core\Package\PackageService;
use Concrete\Core\Package\StartingPointPackage;
use Concrete\Core\Support\Facade\Application;
use Concrete\Core\Validation\CSRF\Token;

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

    public function install_content()
    {
        parent::install_content();

        /*
         * CIF file format doesn't allow to perform a full content swap.
         * So we need to install this package manually.
         */

        $app = Application::getFacadeApplication();
        /** @var PackageService $packageService */
        $packageService = $app->make(PackageService::class);
        /** @var Token $token */
        $token = $app->make(Token::class);

        /** @noinspection PhpDeprecationInspection */
        $pkgClass = Package::getClass("bitter_theme");

        if ($pkgClass) {
            $packageService->install($pkgClass, [
                "pkgDoFullContentSwap" => 1,
                "ccm_token" => $token->generate('install_options_selected')
            ]);
        }
    }

}
