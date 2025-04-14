<?php
class Default_action_ContactForm_bef8390eaefb7384 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

<div class="google-map-form">
    <div class="google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56481.31329163797!2d-82.30112043759952!3d27.776444959332093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sUnited%20States%20solar!5e0!3m2!1sen!2sin!4v1706008331370!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="contact-form-box">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Contact now</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with us</h2>
                    </div>

                    ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'overrideConfiguration' => [],
'persistenceIdentifier' => 'fileadmin/form_definitions/contactform.form.yaml',
'factoryClass' => 'TYPO3\\CMS\\Form\\Domain\\Factory\\ArrayFormFactory',
'prototypeName' => 'standard',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Form\ViewHelpers\RenderViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '
                </div>
            </div>
        </div>
    </div>
</div>

 ';

    return $output0;
}

}

#