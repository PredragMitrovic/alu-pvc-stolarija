<?php
class partial_Navigation_MainMenu_2eeefb5eca8296ee extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div class="collapse navbar-collapse main-menu">
    <div class="nav-menu-wrapper">
        ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\MenuViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
            <ul class="navbar-nav mr-auto" id="menu">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                    <li class="nav-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array10 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.hasSubPages'),
];

$expression11 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments9 = [
'then' => 'submenu',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array10)),
    $renderingContext
),
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments9, $renderingContext)
;

$output8 .= ' ';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.class')]);

$output8 .= '">
                        <a class="nav-link" href="';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.link')]);

$output8 .= '" title="';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title')]);

$output8 .= '">';

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('page.title')]);

$output8 .= '</a>

                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('page.hasSubPages'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
                            ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Menu\SubViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                                <ul>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                                        <li class="nav-item ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('subpage.hasSubPages'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments22 = [
'then' => 'submenu',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments22, $renderingContext)
;

$output21 .= ' ';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subpage.class')]);

$output21 .= '">
                                            <a class="nav-link" href="';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subpage.link')]);

$output21 .= '" title="';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subpage.title')]);

$output21 .= '">';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subpage.title')]);

$output21 .= '</a>

                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('subpage.hasSubPages'),
];

$expression27 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments25 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
                                                ';
// Rendering ViewHelper FluidTYPO3\Vhs\ViewHelpers\Menu\SubViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                                    <ul>
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                                                            <li class="nav-item ';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subsubpage.class')]);

$output34 .= '">
                                                                <a class="nav-link" href="';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subsubpage.link')]);

$output34 .= '" title="';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subsubpage.title')]);

$output34 .= '">';

$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('subsubpage.title')]);

$output34 .= '</a>
                                                            </li>
                                                        ';
return $output34;
};

$arguments32 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('subsubPages'),
'as' => 'subsubpage',
];

$output31 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments32, $renderingContext, $renderChildrenClosure33);

$output31 .= '
                                                    </ul>
                                                ';
return $output31;
};

$arguments29 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('subpage.uid'),
'as' => 'subsubPages',
];

$output28 .= $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\Menu\SubViewHelper::class, $arguments29, $renderingContext, $renderChildrenClosure30);

$output28 .= '
                                            ';
return $output28;
},
];

$output21 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments25, $renderingContext)
;

$output21 .= '
                                        </li>
                                    ';
return $output21;
};

$arguments19 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('subPages'),
'as' => 'subpage',
];

$output18 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments19, $renderingContext, $renderChildrenClosure20);

$output18 .= '
                                </ul>
                            ';
return $output18;
};

$arguments16 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('page.uid'),
'as' => 'subPages',
];

$output15 .= $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\Menu\SubViewHelper::class, $arguments16, $renderingContext, $renderChildrenClosure17);

$output15 .= '
                        ';
return $output15;
},
];

$output8 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::class, $arguments12, $renderingContext)
;

$output8 .= '
                    </li>
                ';
return $output8;
};

$arguments6 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('mainMenu'),
'as' => 'page',
];

$output5 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::class, $arguments6, $renderingContext, $renderChildrenClosure7);

$output5 .= '
            </ul>
        ';
return $output5;
};

$array3 = [
'0' => 'true',
];

$expression4 = function($context) {return TRUE;};

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
'rootLineAs' => 'rootLine',
'excludePages' => '',
'forceAbsoluteUrl' => false,
'doktypes' => '',
'divider' => NULL,
'pageUid' => NULL,
'entryLevel' => 0,
'levels' => 1,
'expandAll' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
'as' => 'mainMenu',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(FluidTYPO3\Vhs\ViewHelpers\MenuViewHelper::class, $arguments1, $renderingContext, $renderChildrenClosure2);

$output0 .= '



    </div>

    <!-- Header Social Icons Start -->
    <!-- Language Switcher Dropdown -->

    <div class="dropdown">
        <button class="btn dropdown-toggle d-flex align-items-center gap-2"
                type="button"
                id="dropdownLang"
                data-bs-toggle="dropdown"
                aria-expanded="false">
            <img src="/images/sr.png" alt="SR" width="24" height="24" class="rounded-circle"> SR
        </button>

        <ul class="dropdown-menu" aria-labelledby="dropdownLang">
            <li>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return '
                    <img src="/images/sr.png" width="24" class="rounded-circle"> SR
                ';
};

$array37 = [
'L' => 0,
];

$arguments35 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'additionalParams' => $array37,
'class' => 'dropdown-item d-flex align-items-center gap-2',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::class, $arguments35, $renderingContext, $renderChildrenClosure36);

$output0 .= '
            </li>
            <li>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return '
                    <img src="/images/en.png" width="24" class="rounded-circle"> EN
                ';
};

$array40 = [
'L' => 1,
];

$arguments38 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'additionalParams' => $array40,
'class' => 'dropdown-item d-flex align-items-center gap-2',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::class, $arguments38, $renderingContext, $renderChildrenClosure39);

$output0 .= '
            </li>
            <li>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return '
                    <img src="/images/de.png" width="24" class="rounded-circle"> DE
                ';
};

$array43 = [
'L' => 2,
];

$arguments41 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'additionalParams' => $array43,
'class' => 'dropdown-item d-flex align-items-center gap-2',
];

$output0 .= $renderingContext->getViewHelperInvoker()->invoke(TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::class, $arguments41, $renderingContext, $renderChildrenClosure42);

$output0 .= '
            </li>
        </ul>
    </div>

    <script>
        document.addEventListener(\'DOMContentLoaded\', function () {
            const button = document.getElementById(\'dropdownLang\');
            const currentPath = window.location.pathname;

            // Inicijalno postavi trenutni jezik na osnovu URL-a
            if (currentPath.startsWith(\'/en/\')) {
                button.innerHTML = \'<img src="/images/en.png" width="24" class="rounded-circle"> EN\';
            } else if (currentPath.startsWith(\'/de/\')) {
                button.innerHTML = \'<img src="/images/de.png" width="24" class="rounded-circle"> DE\';
            } else {
                button.innerHTML = \'<img src="/images/sr.png" width="24" class="rounded-circle"> SR\';
            }

            // Slušaj klik na svaki item u dropdownu da ažurira dugme pre nego što browser ode na novu stranicu
            const items = document.querySelectorAll(\'.dropdown-menu .dropdown-item\');
            items.forEach(item => {
                item.addEventListener(\'click\', function (e) {
                    const lang = this.getAttribute(\'data-lang\');
                    const img = this.getAttribute(\'data-img\');
                    button.innerHTML = `<img src="${img}" width="24" class="rounded-circle"> ${lang}`;
                });
            });
        });
    </script>




    <!-- Language Switcher Dropdown end -->
</div>
';

    return $output0;
}

}

#