<?php

/* ThiefaineReferentielBundle:Pages:user.html.twig */
class __TwigTemplate_1ef557dcf2813726d26152d4e2323da419d802af75e3b22e6923b15e0e7cd5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"content\">
\t\t<h3>Gestion des utilisateurs</h3>
\t\t<table class=\"table table-hover\">
\t\t  <tr>
\t\t  \t<th>Actions</th>
\t\t  \t<th>Nom <span class=\"glyphicon cheveron-down\" title=\"Trier par nom\"></span></th>
\t\t  \t<th>Prénom <span class=\"glyphicon cheveron-down\" title=\"Trier par prénom\"></span></th>
\t\t  \t<th>Groupe <span class=\"glyphicon cheveron-down\" title=\"Trier par groupe\"></span></th>
\t\t  \t<th>E-mail <span class=\"glyphicon cheveron-down\" title=\"Trier par e-mail\"></span></th>
\t\t  \t<th>Informations</th>
\t\t  </tr>

\t\t  <tr>
\t\t  \t<td data-element=\"Utilisateur n°0\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t</td>
\t\t  \t<td>Nom utilisateur n°0</td>
\t\t  \t<td>Prénom utilisateur n°0</td>
\t\t  \t<td>Groupe n° ";
        // line 23
        echo twig_escape_filter($this->env, twig_random($this->env, 3), "html", null, true);
        echo "</td>
\t\t  \t<td>E-mail utilisateur n°0</td>
\t\t  \t<td>Infos utilisateur n°0</td>
\t\t  </tr>
\t\t  
\t\t  <tr>
\t\t  \t<td data-element=\"Utilisateur n°1\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t</td>
\t\t  \t<td>Nom utilisateur n°1</td>
\t\t  \t<td>Prénom utilisateur n°1</td>
\t\t  \t<td>Groupe n° ";
        // line 35
        echo twig_escape_filter($this->env, twig_random($this->env, 3), "html", null, true);
        echo "</td>
\t\t  \t<td>E-mail utilisateur n°1</td>
\t\t  \t<td>Infos utilisateur n°1</td>
\t\t  </tr>
\t\t  
\t\t  <tr>
\t\t  \t<td data-element=\"Utilisateur n°2\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t</td>
\t\t  \t<td>Nom utilisateur n°2</td>
\t\t  \t<td>Prénom utilisateur n°2</td>
\t\t  \t<td>Groupe n° ";
        // line 47
        echo twig_escape_filter($this->env, twig_random($this->env, 3), "html", null, true);
        echo "</td>
\t\t  \t<td>E-mail utilisateur n°2</td>
\t\t  \t<td>Infos utilisateur n°2</td>
\t\t  </tr>
\t\t  
\t\t  <tr>
\t\t  \t<td data-element=\"Utilisateur n°3\">
\t\t  \t\t<span class=\"glyphicon glyphicon-pencil modifyElement\" title=\"Modifier\"></span>
\t\t  \t\t<span class=\"glyphicon glyphicon-remove removeElement\" title=\"Supprimer\"></span>
\t\t  \t</td>
\t\t  \t<td>Nom utilisateur n°3</td>
\t\t  \t<td>Prénom utilisateur n°3</td>
\t\t  \t<td>Groupe n° ";
        // line 59
        echo twig_escape_filter($this->env, twig_random($this->env, 3), "html", null, true);
        echo "</td>
\t\t  \t<td>E-mail utilisateur n°3</td>
\t\t  \t<td>Infos utilisateur n°3</td>
\t\t  </tr>
\t\t  
\t\t</table>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Pages:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 78,  127 => 43,  137 => 47,  113 => 49,  65 => 28,  228 => 96,  195 => 71,  188 => 77,  218 => 87,  191 => 76,  215 => 87,  212 => 86,  178 => 64,  172 => 64,  148 => 52,  118 => 40,  97 => 59,  261 => 108,  231 => 97,  216 => 81,  210 => 78,  206 => 84,  190 => 70,  186 => 69,  160 => 54,  124 => 42,  152 => 53,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 99,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 79,  192 => 76,  76 => 20,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 6,  23 => 1,  205 => 71,  202 => 82,  185 => 56,  180 => 62,  170 => 58,  146 => 49,  134 => 58,  126 => 56,  90 => 15,  77 => 27,  70 => 40,  53 => 18,  175 => 71,  167 => 59,  150 => 50,  129 => 41,  114 => 53,  104 => 34,  100 => 33,  84 => 13,  58 => 19,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 100,  241 => 77,  229 => 94,  220 => 90,  214 => 69,  177 => 52,  169 => 60,  140 => 63,  132 => 45,  128 => 44,  107 => 31,  61 => 34,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 100,  238 => 85,  235 => 74,  230 => 96,  227 => 81,  224 => 90,  221 => 77,  219 => 76,  217 => 91,  208 => 85,  204 => 77,  179 => 72,  159 => 39,  143 => 56,  135 => 44,  119 => 37,  102 => 29,  71 => 30,  67 => 35,  63 => 25,  59 => 6,  28 => 3,  87 => 25,  21 => 2,  38 => 5,  25 => 4,  93 => 39,  88 => 31,  78 => 34,  46 => 14,  44 => 11,  31 => 4,  26 => 2,  201 => 80,  196 => 73,  183 => 73,  171 => 60,  166 => 57,  163 => 45,  158 => 56,  156 => 53,  151 => 52,  142 => 49,  138 => 48,  136 => 61,  121 => 40,  117 => 39,  105 => 40,  91 => 27,  62 => 20,  49 => 14,  94 => 28,  89 => 33,  85 => 36,  75 => 21,  68 => 19,  56 => 11,  27 => 5,  24 => 7,  19 => 1,  79 => 21,  72 => 32,  69 => 11,  47 => 12,  40 => 8,  37 => 5,  22 => 3,  246 => 101,  157 => 55,  145 => 46,  139 => 45,  131 => 44,  123 => 47,  120 => 53,  115 => 36,  111 => 36,  108 => 36,  101 => 32,  98 => 43,  96 => 38,  83 => 22,  74 => 19,  66 => 18,  55 => 15,  52 => 23,  50 => 8,  43 => 12,  41 => 6,  35 => 6,  32 => 4,  29 => 5,  209 => 82,  203 => 83,  199 => 82,  193 => 79,  189 => 75,  187 => 66,  182 => 66,  176 => 61,  173 => 76,  168 => 63,  164 => 73,  162 => 60,  154 => 29,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 46,  130 => 57,  125 => 40,  122 => 41,  116 => 38,  112 => 37,  109 => 47,  106 => 46,  103 => 44,  99 => 28,  95 => 26,  92 => 40,  86 => 23,  82 => 47,  80 => 34,  73 => 19,  64 => 10,  60 => 26,  57 => 12,  54 => 11,  51 => 10,  48 => 12,  45 => 16,  42 => 10,  39 => 10,  36 => 5,  33 => 6,  30 => 3,);
    }
}
