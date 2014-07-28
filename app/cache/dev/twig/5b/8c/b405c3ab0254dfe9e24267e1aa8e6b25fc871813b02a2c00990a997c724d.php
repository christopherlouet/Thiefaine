<?php

/* ThiefaineReferentielBundle:Zone:edit.html.twig */
class __TwigTemplate_5b8cb405c3ab0254dfe9e24267e1aa8e6b25fc871813b02a2c00990a997c724d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/map.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/css/zone.css"), "html", null, true);
        echo "\">
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
\t";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

\t<div class=\"content zone col-md-9\" data-zone=";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo ">
\t\t<h1>Edition de la zone</h1>

\t\t<p>
\t\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'label');
        echo "
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nom"), 'widget', array("id" => "zoneTitle"));
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitude"), 'label');
        echo "
\t\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "latitude"), 'widget');
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitude"), 'label');
        echo "
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "longitude"), 'widget');
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zoom"), 'label');
        echo "
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "zoom"), 'widget');
        echo "
\t\t</p>

\t\t<p class=\"list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Cocher pour activer/désactiver la zone.\">
\t\t\t<label>Etat de la zone</label>
\t\t\t<table class=\"table table-hover\">
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t  \t\t\t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "actif"), 'label');
        echo "
\t\t\t  \t\t</td><td style=\"text-align: right;\">
\t\t\t  \t\t\t";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "actif"), 'widget');
        echo "
\t\t\t  \t\t</td>
\t\t\t  \t</tr>
\t\t\t</table>
\t\t</p>

    \t<p>
    \t\t<table id=\"mesPoints\">
\t\t        <tbody>
\t                ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "points"));
        foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
            // line 55
            echo "\t                <tr>
\t                    <td class=\"idpoint\"> ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "id"), "html", null, true);
            echo " </td>
\t                    <td class=\"latitudepoint\"> ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "latitude"), "html", null, true);
            echo " </td>
\t                    <td class=\"longitudepoint\"> ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "longitude"), "html", null, true);
            echo " </td>
\t                    <td class=\"radiuspoint\"> ";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["point"]) ? $context["point"] : $this->getContext($context, "point")), "radius"), "html", null, true);
            echo " </td>
\t                </tr>
\t                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t            
\t\t        </tbody>
\t\t    </table>

\t\t    <label for=\"zoneRadius\" class=\"control-label\">Points de la zone</label>
\t\t\t<div class=\"input-group list-form-control\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Saisisser le rayon de la zone à créer. (nota : il est \tpossible de modifier le rayon et déplacer la zone une fois celle-ci crée.)\">
\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"zoneRadius\" placeholder=\"Rayon du point\">
\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t  <button id=\"zoneRadiusBtn\" class=\"btn btn-primary\" type=\"button\">Générer la zone</button>
\t\t\t\t</span>
\t\t\t</div>
\t\t\t<div id=\"MesCercleGoogle\">
\t\t\t\t<table class=\"table table-hover\" style=\"border-collapse: inherit; margin-bottom: 0px;\">
\t\t\t  \t
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<div id=\"MaCarteGoogle\"></div>
\t\t</p>
\t\t<p>
\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Modifier la zone</button>
\t\t\t<a class=\"btn btn-default\" href=";
        // line 81
        echo $this->env->getExtension('routing')->getPath("zone");
        echo ">Annuler</a>
\t\t</p>

\t</div>

\t";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Zone:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  184 => 67,  110 => 37,  81 => 23,  232 => 101,  223 => 94,  211 => 90,  165 => 68,  127 => 45,  137 => 55,  113 => 40,  65 => 16,  218 => 87,  191 => 80,  178 => 69,  198 => 81,  194 => 73,  148 => 67,  118 => 40,  97 => 30,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 53,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 86,  192 => 78,  175 => 71,  76 => 24,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 83,  202 => 82,  185 => 78,  180 => 66,  170 => 59,  146 => 56,  134 => 58,  126 => 47,  90 => 29,  77 => 22,  70 => 18,  53 => 11,  150 => 57,  129 => 58,  114 => 53,  104 => 39,  100 => 33,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 86,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 44,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 95,  224 => 71,  221 => 86,  219 => 89,  217 => 92,  208 => 68,  204 => 81,  179 => 71,  159 => 66,  143 => 55,  135 => 61,  119 => 44,  102 => 29,  71 => 19,  67 => 35,  63 => 17,  59 => 14,  28 => 3,  87 => 26,  21 => 1,  38 => 7,  25 => 4,  93 => 32,  88 => 38,  78 => 34,  46 => 9,  44 => 18,  31 => 4,  26 => 5,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 54,  151 => 62,  142 => 49,  138 => 48,  136 => 46,  121 => 45,  117 => 43,  105 => 45,  91 => 27,  62 => 15,  49 => 10,  94 => 28,  89 => 26,  85 => 36,  75 => 31,  68 => 19,  56 => 14,  27 => 5,  24 => 7,  19 => 1,  79 => 32,  72 => 31,  69 => 11,  47 => 18,  40 => 5,  37 => 5,  22 => 3,  246 => 101,  157 => 64,  145 => 60,  139 => 54,  131 => 59,  123 => 47,  120 => 39,  115 => 51,  111 => 35,  108 => 40,  101 => 31,  98 => 43,  96 => 32,  83 => 36,  74 => 19,  66 => 18,  55 => 21,  52 => 20,  50 => 11,  43 => 8,  41 => 6,  35 => 6,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 67,  193 => 77,  189 => 81,  187 => 76,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 60,  154 => 58,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 43,  125 => 47,  122 => 43,  116 => 38,  112 => 47,  109 => 46,  106 => 36,  103 => 45,  99 => 35,  95 => 26,  92 => 36,  86 => 28,  82 => 23,  80 => 25,  73 => 20,  64 => 26,  60 => 26,  57 => 12,  54 => 11,  51 => 19,  48 => 10,  45 => 9,  42 => 10,  39 => 6,  36 => 2,  33 => 4,  30 => 3,);
    }
}
