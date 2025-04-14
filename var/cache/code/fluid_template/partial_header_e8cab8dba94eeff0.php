<?php
class partial_header_e8cab8dba94eeff0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'';
    }
    public function hasLayout(): bool {
        return false;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): void {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'v' => 
  array (
    0 => 'FluidTYPO3\\Vhs\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
<!-- Topbar Section Start -->
<div class="topbar">
  <div class="container">
    <div class="row align-items-center">
      <!-- Contact Info -->
      <div class="col-lg-4 col-md-6">
        <div class="topbar-contact-info">
          <ul>
            <li>
              <a href="https://maps.google.com?q=Beograd">
                <img src="/images/icon-location.svg" alt="">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'key' => 'topbar.address',
'extensionName' => 'SitePackage',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2)]);

$output0 .= '
              </a>
            </li>
            <li>
              <a href="mailto:office@alupvcbogdanovic.rs">
                <img src="/images/icon-mail.svg" alt="">
                office@alupvcbogdanovic.rs
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Promo Text -->
      <div class="col-lg-4 col-md-6">
        <div class="topbar-offer">
          <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'key' => 'topbar.promoText',
'extensionName' => 'SitePackage',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4)]);

$output0 .= '</p>
        </div>
      </div>

      <!-- Working Hours -->
      <div class="col-lg-4 col-md-6">
        <div class="topbar-time">
          <ul>
            <li>
              <a href="#">
                <img src="/images/icon-clock.svg" alt="">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'languageKey' => NULL,
'key' => 'topbar.workingHours',
'extensionName' => 'SitePackage',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6)]);

$output0 .= '
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Topbar Section End -->


<header class="main-header">
  <div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo Start -->
        <a class="navbar-brand" href="./">
          <img src="/images/logo.webp" alt="Logo" style="max-width: 300px;">
        </a>
        <!-- Logo End -->

        <!-- Main Menu Start -->
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'mainMenu' => $renderingContext->getVariableProvider()->getByPath('mainMenu'),
];

$arguments7 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Navigation/MainMenu',
'arguments' => $array9,
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output0 .= '
        <!-- Main Menu End -->
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>






';

    return $output0;
}

}

#