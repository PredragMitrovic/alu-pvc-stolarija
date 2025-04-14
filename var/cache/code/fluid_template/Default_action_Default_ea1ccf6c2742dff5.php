<?php
class Default_action_Default_ea1ccf6c2742dff5 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): ?string {
        return (string)'page';
    }
    public function hasLayout(): bool {
        return true;
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
 * section content
 */
public function section_55f2b31a6acfaa64(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output0 = '';

$output0 .= '
  <!-- Staticki header partial -->
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'header',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.content_0',
];
$renderChildrenClosure4 = ($arguments3['data'] !== null) ? function() use ($arguments3) { return $arguments3['data']; } : $renderChildrenClosure4;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments3, $renderingContext, $renderChildrenClosure4);

$output0 .= '
  <div class="page-project-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">

          <div class="project-single-sidebar">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.content_1',
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments5, $renderingContext, $renderChildrenClosure6);

$output0 .= '
            <!-- Sidebar CTA Box Start -->
            <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
              <!-- Sidebar CTA Content Start -->
              <div class="sidebar-cta-title">
                <h2>contact info</h2>
              </div>
              <!-- Sidebar CTA Content End -->

              <!-- Sidebar CTA Contact Start -->
              <div class="sidebar-cta-contact">
                <!-- Sidebar CTA Contact Item Start -->
                <div class="sidebar-cta-contact-item">
                  <div class="icon-box">
                    <img src="images/icon-location.svg" alt="">
                  </div>
                  <div class="cta-contact-item-content">
                    <p>Germany - 785, 15th Street Office 478  Berlin</p>
                  </div>
                </div>
                <!-- Sidebar CTA Contact Item Start -->

                <!-- Sidebar CTA Contact Item Start -->
                <div class="sidebar-cta-contact-item">
                  <div class="icon-box">
                    <img src="images/icon-phone.svg" alt="">
                  </div>
                  <div class="cta-contact-item-content">
                    <p>+123 456 789</p>
                  </div>
                </div>
                <!-- Sidebar CTA Contact Item Start -->

                <!-- Sidebar CTA Contact Item Start -->
                <div class="sidebar-cta-contact-item">
                  <div class="icon-box">
                    <img src="images/icon-mail.svg" alt="">
                  </div>
                  <div class="cta-contact-item-content">
                    <p>info@domain.com</p>
                  </div>
                </div>
                <!-- Sidebar CTA Contact Item Start -->
              </div>
              <!-- Sidebar CTA Contact End -->
            </div>
            <!-- Sidebar CTA Box End -->
          </div>
          <!-- Project Sidebar End -->
        </div>

        <div class="col-lg-8">
          <!-- Project Single Content Start -->
          <div class="project-single-content">
            <!-- Project Entry Start -->
            <div class="project-entry">
              ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'data' => NULL,
'currentValueKey' => NULL,
'table' => '',
'typoscriptObjectPath' => 'lib.content_2',
];
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::class, $arguments7, $renderingContext, $renderChildrenClosure8);

$output0 .= '
              <!-- Project Information Start -->
            </div>
            <!-- Project Entry End -->
          </div>
          <!-- Project Single Content End -->
        </div>
      </div>
    </div>
  </div>



  ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'section' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'footer',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::class, $arguments9, $renderingContext, $renderChildrenClosure10);

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext): mixed {
    $output11 = '';

$output11 .= '';

$output11 .= '

';

$output11 .= '';

$output11 .= '
';

    return $output11;
}

}

#