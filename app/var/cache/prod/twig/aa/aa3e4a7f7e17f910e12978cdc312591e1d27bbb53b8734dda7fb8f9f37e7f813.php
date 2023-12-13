<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Configure/AdvancedParameters/Profiles/index.html.twig */
class __TwigTemplate_eea12c43679bac4e49e4792d549a6e07b9c53c01ed2c2ef27d9c0f51c6a58f91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'profiles_list_panel' => [$this, 'block_profiles_list_panel'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/index.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        if (($context["multistoreIsUsed"] ?? null)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "infotip", [0 => ($context["multistoreInfoTip"] ?? null), 1 => true], "method"), "html", null, true);
        }
        // line 30
        echo "  ";
        $this->displayBlock('profiles_list_panel', $context, $blocks);
    }

    public function block_profiles_list_panel($context, array $blocks = [])
    {
        // line 31
        echo "    <div class=\"row\">
      <div class=\"col\">
        ";
        // line 33
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/index.html.twig", 33)->display(twig_array_merge($context, ["grid" => ($context["grid"] ?? null)]));
        // line 34
        echo "      </div>
    </div>
  ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        // line 40
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/profiles.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  77 => 42,  71 => 40,  68 => 39,  62 => 34,  60 => 33,  56 => 31,  49 => 30,  44 => 29,  41 => 28,  31 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Profiles/index.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Profiles/index.html.twig");
    }
}
