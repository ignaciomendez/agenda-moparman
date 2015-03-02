<?php

/* MDOAgendaMoparmanBundle:Contacts:list.html.twig */
class __TwigTemplate_e4ef65b65689e8f616ba76c90eddbfd93132103ea41e7ace5fa4f371c26dafce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<form method=\"post\" id=\"contacts-form\" action=\"/contacts/delete\">
    <div class=\"large-12 columns\">
        ";
        // line 6
        if (((isset($context["letter"]) ? $context["letter"] : null) == "success")) {
            // line 7
            echo "            <div class=\"alert-box success radius\" data-alert=\"\">
                <strong>¡Éxito!</strong> los contactos se han eliminado correctamente.
                <a class=\"close\" href=\"#\">×</a>
            </div>
        ";
        }
        // line 12
        echo "        <table>
            <tbody>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 15
            echo "                <tr>
                    <td width=\"50\" class=\"text-center\"><input type=\"checkbox\" name=\"delete_ids[]\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" /></td>
                    <td width=\"50\" class=\"text-center\"><img src=\"http://placehold.it/48x48&amp;text=Foto\"></td>
                    <td width=\"200\"><a href=\"/contact/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "</a></td>
                    <td width=\"200\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
                    <td width=\"200\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "city", array()), "html", null, true);
            echo "</td>
                    <td width=\"200\">
                        ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contact"], "getCategories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 23
                echo "                            <span class=\"label secondary\"><a href=\"/category/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></span>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>


    <div class=\"small-4 columns right\">
        <div class=\"row\">
            <div class=\"small-6 columns\">
                <a class=\"button tiny alert expand\" href=\"#\" onclick=\"\$('#contacts-form').submit();\">Borrar Selección</a>
            </div>
            <div class=\"small-6 columns\">
                <a class=\"button tiny success expand\" href=\"/contacts/add\">Agregar Nuevo Contacto</a>
            </div>
        </div>
    </div>
</div>
</form>

";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Contacts:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  98 => 25,  87 => 23,  83 => 22,  78 => 20,  74 => 19,  68 => 18,  63 => 16,  60 => 15,  56 => 14,  52 => 12,  45 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
