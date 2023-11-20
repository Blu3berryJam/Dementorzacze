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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig */
class __TwigTemplate_0472f6ea2bc0bbbfab99dcd9226ff304ecb0e8a6dffd13aae766d5554c5e715d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'employee_options_form' => [$this, 'block_employee_options_form'],
            'employee_options_form_rest' => [$this, 'block_employee_options_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('employee_options_form', $context, $blocks);
    }

    public function block_employee_options_form($context, array $blocks = [])
    {
        // line 27
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_employees_save_options")]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Employee options", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        <div class=\"form-group row\">
          <label for=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeOptionsForm"] ?? null), "password_change_time", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password regeneration", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? null), "password_change_time", []), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? null), "password_change_time", []), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Security: Minimum time to wait between two password changes.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 47
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            // line 48
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 54
        echo "          </div>
        </div>

        <div class=\"form-group row\">
          <label for=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", []), "vars", []), "id", []), "html", null, true);
        echo "\" class=\"form-control-label\">
            ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Memorize the language used in Admin panel forms", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
          </label>

          <div class=\"col-sm\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", []), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["employeeOptionsForm"] ?? null), "allow_employee_specific_language", []), 'widget');
        echo "
            <small class=\"form-text\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Allow employees to select a specific language for the Admin panel form.", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </small>

            ";
        // line 69
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            // line 70
            echo "            <div class=\"alert alert-warning mt-2 mb-0\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You can't change the value of this configuration field in the context of this shop.", [], "Admin.Notifications.Warning"), "html", null, true);
            echo "
              </p>
            </div>
            ";
        }
        // line 76
        echo "          </div>
        </div>

        ";
        // line 79
        $this->displayBlock('employee_options_form_rest', $context, $blocks);
        // line 82
        echo "      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary pull-right\"
                ";
        // line 87
        if ( !($context["canOptionsBeChanged"] ?? null)) {
            echo "disabled";
        }
        // line 88
        echo "        >
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "
        </button>
      </div>
    </div>
  </div>
  ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["employeeOptionsForm"] ?? null), 'form_end');
        echo "
";
    }

    // line 79
    public function block_employee_options_form_rest($context, array $blocks = [])
    {
        // line 80
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["employeeOptionsForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  176 => 79,  170 => 94,  162 => 89,  159 => 88,  155 => 87,  148 => 82,  146 => 79,  141 => 76,  134 => 72,  130 => 70,  128 => 69,  122 => 66,  117 => 64,  113 => 63,  106 => 59,  102 => 58,  96 => 54,  89 => 50,  85 => 48,  83 => 47,  77 => 44,  72 => 42,  68 => 41,  61 => 37,  57 => 36,  49 => 31,  41 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/Blocks/employee_options.html.twig");
    }
}
