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

/* @PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig */
class __TwigTemplate_edbad8dfab1b964154d8ab3c7def81cfe1dc9361aca3faf075e88ded59b70cd4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'administration_form_general' => [$this, 'block_administration_form_general'],
            'administration_form_upload_quota' => [$this, 'block_administration_form_upload_quota'],
            'administration_form_notifications' => [$this, 'block_administration_form_notifications'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["generalForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 28
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["uploadQuotaForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["notificationsForm"] ?? null), [0 => "PrestaShopBundle:Admin/TwigTemplateForm:prestashop_ui_kit.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        // line 32
        echo "  <div class=\"row justify-content-center\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_start', ["attr" => ["class" => "form col"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_administration_general_save")]);
        echo "
      ";
        // line 34
        $this->displayBlock('administration_form_general', $context, $blocks);
        // line 51
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["generalForm"] ?? null), 'form_end');
        echo "
  </div>

  <div class=\"row justify-content-center\">
    ";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_start', ["attr" => ["class" => "form col"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_administration_upload_quota_save")]);
        echo "
      ";
        // line 56
        $this->displayBlock('administration_form_upload_quota', $context, $blocks);
        // line 73
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["uploadQuotaForm"] ?? null), 'form_end');
        echo "
  </div>

  <div class=\"row justify-content-center\">
    ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_start', ["attr" => ["class" => "form col"], "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_administration_notifications_save")]);
        echo "
      ";
        // line 78
        $this->displayBlock('administration_form_notifications', $context, $blocks);
        // line 108
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["notificationsForm"] ?? null), 'form_end');
        echo "
  </div>
";
    }

    // line 34
    public function block_administration_form_general($context, array $blocks = [])
    {
        // line 35
        echo "        <div class=\"card\" id=\"configuration_fieldset_general\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">settings</i> ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", [], "Admin.Global"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? null), 'widget');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-primary\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      ";
    }

    // line 56
    public function block_administration_form_upload_quota($context, array $blocks = [])
    {
        // line 57
        echo "        <div class=\"card\" id=\"configuration_fieldset_upload\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">file_upload</i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload quota", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["uploadQuotaForm"] ?? null), 'widget');
        echo "
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-primary\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      ";
    }

    // line 78
    public function block_administration_form_notifications($context, array $blocks = [])
    {
        // line 79
        echo "        <div class=\"card\" id=\"configuration_fieldset_notifications\">
          <h3 class=\"card-header\">
            <i class=\"material-icons\">priority_high</i> ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

            <span
              class=\"help-box\"
              data-container=\"body\"
              data-toggle=\"popover\"
              data-trigger=\"hover\"
              data-placement=\"right\"
              data-content=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Notifications are numbered bubbles displayed at the very top of your back office, right next to the shop's name. They display the number of new items since you last clicked on them.", [], "Admin.Advparameters.Help"), "html", null, true);
        echo "\"
              title=\"\"
            >
            </span>
          </h3>
          <div class=\"card-block row\">
            <div class=\"card-text\">
              <div class=\"card-text\">
                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["notificationsForm"] ?? null), 'widget');
        echo "
              </div>
            </div>
          </div>
          <div class=\"card-footer\">
            <div class=\"d-flex justify-content-end\">
              <button type=\"submit\" class=\"btn btn-primary\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 103,  188 => 97,  177 => 89,  166 => 81,  162 => 79,  159 => 78,  150 => 68,  142 => 63,  135 => 59,  131 => 57,  128 => 56,  119 => 46,  111 => 41,  104 => 37,  100 => 35,  97 => 34,  89 => 108,  87 => 78,  83 => 77,  75 => 73,  73 => 56,  69 => 55,  61 => 51,  59 => 34,  55 => 33,  52 => 32,  49 => 31,  44 => 25,  42 => 29,  40 => 28,  38 => 27,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/administration.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/administration.html.twig");
    }
}
