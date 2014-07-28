<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_eee91a1b52e113de526b542e8d25c4d7d987bdf5eca7a83e2c305791ab353f34 extends Twig_Template
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
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  174 => 74,  386 => 159,  371 => 156,  363 => 153,  358 => 151,  345 => 147,  343 => 146,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  307 => 128,  302 => 125,  296 => 121,  290 => 119,  288 => 118,  281 => 114,  276 => 111,  274 => 110,  259 => 103,  253 => 100,  222 => 83,  155 => 47,  462 => 202,  446 => 197,  441 => 196,  429 => 188,  422 => 184,  415 => 180,  401 => 172,  394 => 168,  380 => 158,  361 => 152,  338 => 135,  335 => 134,  329 => 131,  323 => 128,  320 => 127,  315 => 131,  303 => 122,  300 => 121,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  216 => 79,  207 => 75,  181 => 65,  172 => 57,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  522 => 406,  188 => 76,  153 => 69,  367 => 155,  353 => 149,  350 => 327,  308 => 287,  306 => 286,  167 => 71,  184 => 63,  110 => 37,  81 => 23,  232 => 88,  223 => 94,  211 => 90,  165 => 60,  194 => 68,  127 => 35,  137 => 55,  113 => 48,  65 => 11,  218 => 87,  191 => 77,  178 => 59,  148 => 67,  118 => 49,  97 => 30,  251 => 104,  245 => 101,  210 => 77,  206 => 77,  190 => 70,  186 => 74,  160 => 55,  124 => 53,  152 => 46,  687 => 297,  683 => 295,  634 => 456,  628 => 245,  623 => 242,  621 => 241,  613 => 235,  609 => 233,  603 => 232,  579 => 229,  574 => 227,  571 => 226,  568 => 225,  564 => 224,  561 => 223,  558 => 222,  555 => 221,  536 => 218,  531 => 216,  528 => 215,  524 => 214,  521 => 213,  518 => 212,  515 => 211,  496 => 208,  491 => 206,  488 => 205,  484 => 204,  479 => 202,  466 => 199,  456 => 197,  454 => 196,  451 => 195,  449 => 198,  439 => 195,  436 => 188,  434 => 187,  431 => 189,  426 => 183,  417 => 179,  408 => 176,  404 => 176,  396 => 173,  389 => 160,  378 => 157,  376 => 161,  373 => 156,  359 => 154,  351 => 141,  347 => 151,  344 => 150,  327 => 138,  325 => 129,  317 => 133,  311 => 132,  301 => 128,  297 => 127,  293 => 120,  289 => 113,  286 => 112,  279 => 122,  265 => 105,  263 => 109,  260 => 108,  255 => 101,  237 => 96,  233 => 87,  226 => 84,  213 => 78,  200 => 72,  197 => 69,  192 => 76,  175 => 58,  76 => 31,  161 => 56,  527 => 408,  520 => 405,  517 => 404,  513 => 402,  508 => 400,  503 => 399,  486 => 385,  481 => 203,  475 => 382,  473 => 381,  354 => 264,  348 => 140,  342 => 137,  340 => 145,  280 => 202,  20 => 1,  34 => 5,  23 => 4,  205 => 71,  202 => 94,  185 => 75,  180 => 66,  170 => 56,  146 => 56,  134 => 54,  126 => 47,  90 => 20,  77 => 25,  70 => 15,  53 => 12,  150 => 55,  129 => 58,  114 => 53,  104 => 42,  100 => 36,  84 => 24,  58 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 191,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 172,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 157,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 105,  337 => 103,  322 => 136,  314 => 99,  312 => 130,  309 => 129,  305 => 129,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 63,  169 => 60,  140 => 47,  132 => 58,  128 => 43,  107 => 34,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 89,  230 => 96,  227 => 86,  224 => 71,  221 => 86,  219 => 76,  217 => 92,  208 => 76,  204 => 78,  179 => 72,  159 => 66,  143 => 55,  135 => 61,  119 => 40,  102 => 41,  71 => 23,  67 => 24,  63 => 18,  59 => 16,  28 => 3,  87 => 34,  21 => 2,  38 => 7,  25 => 4,  93 => 38,  88 => 32,  78 => 18,  46 => 13,  44 => 10,  31 => 4,  26 => 6,  201 => 80,  196 => 92,  183 => 77,  171 => 73,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 62,  142 => 48,  138 => 56,  136 => 71,  121 => 50,  117 => 43,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 30,  56 => 14,  27 => 3,  24 => 3,  19 => 1,  79 => 18,  72 => 27,  69 => 26,  47 => 8,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 64,  145 => 74,  139 => 54,  131 => 59,  123 => 42,  120 => 31,  115 => 51,  111 => 47,  108 => 47,  101 => 43,  98 => 45,  96 => 37,  83 => 33,  74 => 26,  66 => 25,  55 => 16,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 5,  29 => 3,  209 => 89,  203 => 73,  199 => 93,  193 => 77,  189 => 66,  187 => 84,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 56,  147 => 43,  144 => 42,  141 => 51,  133 => 50,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 47,  109 => 27,  106 => 51,  103 => 45,  99 => 23,  95 => 34,  92 => 43,  86 => 28,  82 => 19,  80 => 32,  73 => 16,  64 => 23,  60 => 20,  57 => 20,  54 => 19,  51 => 13,  48 => 16,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
