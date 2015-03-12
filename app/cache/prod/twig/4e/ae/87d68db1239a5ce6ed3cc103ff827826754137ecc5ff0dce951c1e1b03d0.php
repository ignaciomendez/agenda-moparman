<?php

/* MDOAgendaMoparmanBundle:Form:fields.html.twig */
class __TwigTemplate_4eae87d68db1239a5ce6ed3cc103ff827826754137ecc5ff0dce951c1e1b03d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gender_widget' => array($this, 'block_gender_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('gender_widget', $context, $blocks);
    }

    public function block_gender_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["expanded"]) ? $context["expanded"] : null)) {
            // line 4
            echo "            <ul ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 6
                echo "                    <li>
                        ";
                // line 7
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                        ";
                // line 8
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </ul>
        ";
        } else {
            // line 13
            echo "            ";
            // line 14
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 16
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MDOAgendaMoparmanBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  63 => 14,  61 => 13,  57 => 11,  48 => 8,  44 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
