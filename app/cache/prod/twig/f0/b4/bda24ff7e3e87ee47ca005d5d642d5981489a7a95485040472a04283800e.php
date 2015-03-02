<?php

/* MDOAgendaMoparmanBundle:Contacts:index.html.twig */
class __TwigTemplate_f0b4bda24ff7e3e87ee47ca005d5d642d5981489a7a95485040472a04283800e extends Twig_Template
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
        echo "<div class=\"large-12 columns\">
    <table>
        <tbody>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) ? $context["contacts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 8
            echo "        <tr>
            <td width=\"50\" class=\"text-center\"><input type=\"checkbox\" name=\"delete_ids\" value=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "id", array()), "html", null, true);
            echo "\" /></td>
            <td width=\"50\" class=\"text-center\"><img style=\"width:48px;height: 48px;\" width=\"48\" height=\"48\" border=\"1\" /></td>
            <td width=\"200\"><a href=\"#\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "name", array()), "html", null, true);
            echo "</a></td>
            <td width=\"200\">";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "phone", array()), "html", null, true);
            echo "</td>
            <td width=\"200\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["contact"], "city", array()), "html", null, true);
            echo "</td>
            <td width=\"200\">
                ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["contact"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 16
                echo "                    <span class=\"label secondary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Contacts:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  82 => 18,  73 => 16,  69 => 15,  64 => 13,  60 => 12,  56 => 11,  51 => 9,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}
