<?php

/* MDOAgendaMoparmanBundle:Categories:index.html.twig */
class __TwigTemplate_682e972bf7e526dea9f7ff715a827414e65e69d5a571e4be8ce5741170f94ce9 extends Twig_Template
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
        echo "<form method=\"post\" id=\"categories-form\" action=\"/categories/delete\">
    <div class=\"large-12 columns\">
        <table>
            <tbody>
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "            <tr>
                <td width=\"50\" class=\"text-center\"><input type=\"checkbox\" name=\"delete_ids\" value=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" /></td>
                <td width=\"50\" class=\"text-center\"><img src=\"http://placehold.it/48x48&amp;text=Foto\"></td>
                <td width=\"1500\"><strong><a href=\"/contacts/category/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></strong> <a href=\"/categories/edit/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\">[editar]</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </tbody>
        </table>

        <div class=\"small-4 columns right\">
            <div class=\"row\">
                <div class=\"small-6 columns\">
                    <a class=\"button tiny alert expand\" href=\"#\" onclick=\"\$('#categories-form').submit();\">Borrar Selección</a>
                </div>
                <div class=\"small-6 columns\">
                    <a class=\"button tiny success expand\" href=\"/contacts/add\">Agregar Nueva Categoría</a>
                </div>
            </div>
        </div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 15,  57 => 12,  52 => 10,  49 => 9,  45 => 8,  39 => 4,  36 => 3,  11 => 1,);
    }
}
