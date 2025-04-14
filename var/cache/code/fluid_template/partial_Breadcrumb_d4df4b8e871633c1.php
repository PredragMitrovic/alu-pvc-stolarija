<?php
class partial_Breadcrumb_d4df4b8e871633c1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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


';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\BreadCrumbViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    <ol class="breadcrumb">
        <!-- Always include Home link -->
        <li class="breadcrumb-item">
            <a href="/" title="Home">home</a>
        </li>

        <!-- Show current page title -->
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\InfoViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'as' => NULL,
'pageUid' => 0,
'field' => 'title',
];

$arguments4 = [
'name' => 'currentPageTitle',
'value' => $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\Page\InfoViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7),
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Page\InfoViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'as' => NULL,
'pageUid' => 0,
'field' => 'uid',
];

$arguments8 = [
'name' => 'currentPageUid',
'value' => $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\Page\InfoViewHelper::class, $arguments10, $renderingContext, $renderChildrenClosure11),
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [FluidTYPO3\Vhs\ViewHelpers\Variable\SetViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '

        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('currentPageUid'),
'1' => ' != 1',
];

$expression14 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != 1);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
            <li class="breadcrumb-item active" aria-current="page">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('currentPageTitle');
};

$arguments16 = [
'value' => NULL,
'mode' => 'lower',
];

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\Format\CaseViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17)]);

$output15 .= '
            </li>
        ';
return $output15;
},
];

$output3 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output3 .= '
    </ol>
';
return $output3;
};

$arguments1 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'forceClosingTag' => false,
'hideIfEmpty' => false,
'contenteditable' => NULL,
'contextmenu' => NULL,
'draggable' => NULL,
'dropzone' => NULL,
'translate' => NULL,
'spellcheck' => NULL,
'hidden' => NULL,
'showAccessProtected' => false,
'classAccessProtected' => 'protected',
'classAccessGranted' => 'access-granted',
'useShortcutUid' => NULL,
'useShortcutTarget' => NULL,
'useShortcutData' => false,
'tagName' => 'ul',
'tagNameChildren' => 'li',
'entryLevel' => 0,
'levels' => 1,
'expandAll' => false,
'classFirst' => '',
'classLast' => '',
'classActive' => 'active',
'classCurrent' => 'current',
'substElementUid' => false,
'showHiddenInMenu' => false,
'showCurrent' => true,
'linkCurrent' => true,
'linkActive' => true,
'titleFields' => 'nav_title,title',
'includeAnchorTitle' => true,
'includeSpacers' => false,
'deferred' => false,
'as' => 'breadcrumb',
'excludePages' => '',
'forceAbsoluteUrl' => false,
'doktypes' => '',
'divider' => NULL,
'pageUid' => NULL,
'endLevel' => NULL,
'rootLineAs' => 'breadcrumb',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\Page\BreadCrumbViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

    return $output0;
}

}

#