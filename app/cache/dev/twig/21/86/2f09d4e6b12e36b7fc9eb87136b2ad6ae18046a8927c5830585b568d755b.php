<?php

/* base.html.twig */
class __TwigTemplate_21862f09d4e6b12e36b7fc9eb87136b2ad6ae18046a8927c5830585b568d755b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "21fab8b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_jquery_1.js");
            // line 12
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "21fab8b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_2_fastclick_1.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "21fab8b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_2_foundation.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "21fab8b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_2_jquery.cookie_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "21fab8b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_2_modernizr_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "21fab8b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main_part_2_placeholder_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "21fab8b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_21fab8b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/compiled/main.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "df9bcde_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_df9bcde_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/df9bcde_part_1_foundation.min_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
            // asset "df9bcde_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_df9bcde_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/df9bcde_part_1_styles_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "df9bcde"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_df9bcde") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/df9bcde.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function () {
                \$(document).foundation();
            });

        </script>
    </head>
    <body>
    <div class=\"row collapse\">
        <div class=\"small-8 columns\">
            ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e255e7e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e255e7e_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e255e7e_logo_1.png");
            // line 28
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
            ";
        } else {
            // asset "e255e7e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e255e7e") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/e255e7e.png");
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"Example\" />
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "        </div>
        <br/>
        <div class=\" small-4 columns\">
            <div class=\"row collapse\">
                 <div class=\"large-10 small-9 columns\">
                    <form method=\"get\" action=\"/forum/posts\" accept-charset=\"UTF-8\"><div style=\"margin:0;padding:0;display:inline\"><input type=\"hidden\" value=\"✓\" name=\"utf8\"></div>
                         <input type=\"text\" placeholder=\"Buscar\" name=\"search\" id=\"search\" class=\"search-bar\">
                     </form></div>
                 <div class=\"large-2 small-3 columns\">
                     <button onclick=\"window.location.href = '/search/'+\$('#search').val();\" type=\"submit\" name=\"button\" class=\"postfix search button expand\">Buscar</button>
                 </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <nav role=\"navigation\" data-topbar=\"\" class=\"top-bar\">
            <ul class=\"title-area\">
                <!-- Title Area -->
                <li class=\"name\">

                </li>
                <!-- Remove the class \"menu-icon\" to get rid of menu icon. Take out \"Menu\" to just have icon alone -->
                <li class=\"toggle-topbar menu-icon\"><a href=\"\"><span>Menu</span></a></li>
            </ul>


            <section class=\"top-bar-section\">
                <ul class=\"left\">
                    <li><a href=\"/\">Inicio</a></li>
                    <li class=\"has-dropdown not-click\"><a href=\"/contacts\">Contactos</a>
                        <ul class=\"dropdown\">
                            <li><a href=\"/contacts/add\">Nuevo Contacto</a></li>
                            <li><a href=\"/categories\">Categorías</a></li>
                        </ul>
                    </li>
                    <li><a href=\"#\">Vencimientos</a></li>

                </ul>
                <!-- Right Nav Section -->
                <ul class=\"right\">

                    <!--<li><a href=\"#\">Item 2</a></li>-->
                </ul>
            </section></nav> <br/>
    </div>

        <div class=\"row\">
            <div class=\"large-12 medium-12 columns\">
                <ul class=\"breadcrumbs\">
                    ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 80
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "section", array()), "html", null, true);
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "                </ul>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"large-12 columns\">
                ";
        // line 87
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "            </div>
        </div>

    <div class=\"row\">
        <hr/>
        <div class=\"large-12 columns text-right\">
            <p>&copy; 2015, <a href=\"http://milardovich.com.ar/\">Sergio Milardovich</a> </p>
        </div>
    </div>
    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Agenda Moparman";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 87
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 87,  244 => 7,  239 => 6,  233 => 5,  217 => 88,  215 => 87,  208 => 82,  197 => 80,  193 => 79,  142 => 30,  128 => 28,  124 => 27,  112 => 17,  92 => 15,  87 => 14,  43 => 12,  38 => 8,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
