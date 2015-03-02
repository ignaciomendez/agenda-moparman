<?php

/* MDOAgendaMoparmanBundle:Contacts:new.html.twig */
class __TwigTemplate_3da29dff5b1fb2bb6b8393fb13109b5c7971c3cf4f6baa8aa03568b6ea7e1de5 extends Twig_Template
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
        echo "    ";
        if (((isset($context["letter"]) ? $context["letter"] : null) == "success")) {
            // line 5
            echo "        <div class=\"alert-box success radius\" data-alert=\"\">
            <strong>¡Éxito!</strong> el cliente se ha agregado correctamente.
            <a class=\"close\" href=\"#\">×</a>
        </div>
    ";
        }
        // line 10
        echo "    <form action=\"#\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
    </form>
";
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Contacts:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  49 => 10,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
