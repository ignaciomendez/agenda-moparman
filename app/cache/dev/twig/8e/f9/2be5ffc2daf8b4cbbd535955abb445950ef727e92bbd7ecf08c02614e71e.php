<?php

/* MDOAgendaMoparmanBundle:Search:results.html.twig */
class __TwigTemplate_8ef92be5ffc2daf8b4cbbd535955abb445950ef727e92bbd7ecf08c02614e71e extends Twig_Template
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
        echo "    <div class=\"row\"><div class=\"large-12 columns\">
    ";
        // line 5
        if (((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")) != null)) {
            // line 6
            echo "        <h3>Resultados de Categorías</h3>
        <table>
            <tbody>
            ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 10
                echo "                <tr>
                    <td width=\"50\" class=\"text-center\"><input type=\"checkbox\" name=\"delete_ids[]\" value=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" /></td>
                    <td width=\"50\" class=\"text-center\"><img src=\"http://placehold.it/48x48&amp;text=Foto\"></td>
                    <td width=\"1500\"><strong><a href=\"/contacts/category/";
                // line 13
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
            // line 16
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 19
            echo "        No se encontraron <strong>categorías</strong> con este criterio
    ";
        }
        // line 21
        echo "    </div></div>
    <div class=\"row\"><div class=\"large-12 columns\">
    ";
        // line 23
        if (((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")) != null)) {
            // line 24
            echo "        <hr/>
        <h3>Resultados de Contactos</h3>

        <table>
            <tbody>
            ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : $this->getContext($context, "contacts")));
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 30
                echo "                <tr>
                    <td width=\"50\" class=\"text-center\"><input type=\"checkbox\" name=\"delete_ids[]\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
                echo "\" /></td>
                    <td width=\"50\" class=\"text-center\"><img src=\"http://placehold.it/48x48&amp;text=Foto\"></td>
                    <td width=\"200\"><a href=\"/contact/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
                echo "</a></td>
                    <td width=\"200\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
                echo "</td>
                    <td width=\"200\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "city", array()), "html", null, true);
                echo "</td>
                    <td width=\"200\">
                        ";
                // line 37
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contact"], "getCategory", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 38
                    echo "                            <span class=\"label secondary\"><a href=\"/contacts/category/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 46
            echo "        No se encontraron <strong>contactos</strong> con este criterio
    ";
        }
        // line 48
        echo "    </div></div>
";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Search:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 48,  151 => 46,  146 => 43,  138 => 40,  127 => 38,  123 => 37,  118 => 35,  114 => 34,  108 => 33,  103 => 31,  100 => 30,  96 => 29,  89 => 24,  87 => 23,  83 => 21,  79 => 19,  74 => 16,  61 => 13,  56 => 11,  53 => 10,  49 => 9,  44 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
