<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_33bad46d427c77ca49bd89c7d063fb47d552c9b5ffe1af924b2f63dbd685d2d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\" style=\"width: 25%\">Key</th>
            <th scope=\"col\" style=\"width: 75%\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td><pre>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('profiler')->dumpValue($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</pre></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 61,  184 => 67,  110 => 37,  81 => 23,  232 => 101,  223 => 94,  211 => 90,  165 => 68,  194 => 73,  127 => 45,  137 => 55,  113 => 40,  65 => 11,  218 => 87,  191 => 80,  178 => 69,  148 => 67,  118 => 39,  97 => 30,  251 => 104,  245 => 101,  210 => 78,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 53,  152 => 52,  687 => 297,  683 => 295,  634 => 248,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 194,  439 => 189,  436 => 188,  434 => 187,  431 => 186,  426 => 183,  417 => 179,  408 => 177,  404 => 176,  396 => 173,  389 => 171,  378 => 162,  376 => 161,  373 => 160,  359 => 154,  351 => 152,  347 => 151,  344 => 150,  327 => 138,  325 => 137,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 126,  289 => 125,  286 => 124,  279 => 122,  265 => 110,  263 => 109,  260 => 108,  255 => 105,  237 => 96,  233 => 97,  226 => 93,  213 => 84,  200 => 74,  197 => 86,  192 => 76,  175 => 71,  76 => 24,  161 => 56,  527 => 46,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 262,  342 => 260,  340 => 149,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 71,  202 => 81,  185 => 78,  180 => 66,  170 => 59,  146 => 56,  134 => 58,  126 => 47,  90 => 29,  77 => 25,  70 => 26,  53 => 17,  150 => 57,  129 => 58,  114 => 53,  104 => 37,  100 => 36,  84 => 22,  58 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 153,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 98,  309 => 97,  305 => 129,  298 => 91,  294 => 90,  285 => 89,  283 => 123,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 107,  229 => 94,  220 => 92,  214 => 69,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 43,  107 => 34,  61 => 16,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 96,  227 => 89,  224 => 71,  221 => 86,  219 => 76,  217 => 92,  208 => 68,  204 => 81,  179 => 72,  159 => 66,  143 => 55,  135 => 61,  119 => 44,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 20,  28 => 6,  87 => 33,  21 => 1,  38 => 7,  25 => 4,  93 => 32,  88 => 38,  78 => 18,  46 => 12,  44 => 11,  31 => 8,  26 => 3,  201 => 80,  196 => 73,  183 => 77,  171 => 70,  166 => 67,  163 => 45,  158 => 59,  156 => 54,  151 => 62,  142 => 48,  138 => 47,  136 => 46,  121 => 45,  117 => 43,  105 => 45,  91 => 35,  62 => 24,  49 => 14,  94 => 28,  89 => 26,  85 => 23,  75 => 28,  68 => 12,  56 => 14,  27 => 7,  24 => 2,  19 => 1,  79 => 29,  72 => 31,  69 => 11,  47 => 15,  40 => 11,  37 => 6,  22 => 3,  246 => 101,  157 => 64,  145 => 60,  139 => 54,  131 => 59,  123 => 47,  120 => 39,  115 => 51,  111 => 35,  108 => 40,  101 => 31,  98 => 43,  96 => 30,  83 => 30,  74 => 26,  66 => 25,  55 => 15,  52 => 20,  50 => 15,  43 => 8,  41 => 6,  35 => 9,  32 => 4,  29 => 3,  209 => 89,  203 => 86,  199 => 67,  193 => 77,  189 => 81,  187 => 84,  182 => 66,  176 => 65,  173 => 76,  168 => 79,  164 => 73,  162 => 59,  154 => 58,  149 => 56,  147 => 51,  144 => 65,  141 => 48,  133 => 50,  130 => 43,  125 => 47,  122 => 43,  116 => 38,  112 => 47,  109 => 46,  106 => 36,  103 => 45,  99 => 40,  95 => 26,  92 => 28,  86 => 28,  82 => 23,  80 => 29,  73 => 23,  64 => 26,  60 => 20,  57 => 39,  54 => 11,  51 => 37,  48 => 16,  45 => 14,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
