<?php

/* MDOAgendaMoparmanBundle:Contacts:single.html.twig */
class __TwigTemplate_54f8a9ff6203667499218beaaa0fdb481561eabddecb777b1ff70a302b955bcf extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"large-2 columns\">
        <div class=\"row\">
            <img src=\"http://placehold.it/1000x1000&amp;text=Foto\">
        </div>
        <div class=\"row\">
            <h5>Categorías</h5>
            <div class=\"categories\">
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "categories", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo " <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "

            </div>
        </div>

    </div>
    <div class=\"large-10 columns\">
        <div class=\"row\">
            <h4> Información Personal <small><a href=\"/contact/edit/";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "id", array()), "html", null, true);
        echo "\">[editar]</a></small></h4>
            <div class=\"large-12 columns\">
                <label><i class=\"general fi-torso\"></i>  ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "name", array()), "html", null, true);
        echo " </label>
            </div>
            <div class=\"large-12 columns\">
                <label><i class=\"general fi-marker\"></i> ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "city", array()), "html", null, true);
        echo "</label>
            </div>
            <div class=\"large-12 columns\">
                <label><i class=\"general fi-telephone\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "phone", array()), "html", null, true);
        echo " </label>
            </div>
            <div class=\"large-12 columns\">
                <label><i class=\"general fi-mail\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "email", array()), "html", null, true);
        echo " </label>
            </div>
            <div class=\"large-12 columns\">
                <label>Observaciones:
                </label>
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "notes", array()), "html", null, true);
        echo "
            </div>
            <hr>


        </div>
    </div>



";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Contacts:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  95 => 34,  89 => 31,  83 => 28,  77 => 25,  72 => 23,  62 => 15,  53 => 13,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
