<?php

/* ThiefaineUserBundle::layout.html.twig */
class __TwigTemplate_a24b6df345e13d9364f78c5dab0af8aacd0146e9f9c03451936cbb8af0ce5837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineReferentielBundle:Nav:leftnav.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'connexion' => array($this, 'block_connexion'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ThiefaineReferentielBundle:Nav:leftnav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "            <div class=\"navbar-left\">
                ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " | 
                <a href=\"";
            // line 8
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\" class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-user\" name=\"connect\"></span> Mon compte
                </a>
                <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" class=\"btn btn-primary\">
                    <span class=\"glyphicon glyphicon-log-out\" name=\"connect\"></span> Déconnexion
                </a>
            </div>
        ";
        } else {
            // line 16
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_connexion($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 23
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 24
                echo "            <span class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                ";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
            </span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ThiefaineUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  89 => 25,  84 => 24,  71 => 21,  66 => 18,  58 => 16,  44 => 8,  40 => 7,  37 => 6,  35 => 5,  32 => 4,  29 => 3,  230 => 96,  227 => 95,  219 => 89,  214 => 86,  205 => 83,  202 => 82,  198 => 81,  194 => 79,  192 => 78,  187 => 76,  179 => 71,  168 => 63,  162 => 60,  152 => 53,  148 => 52,  142 => 49,  138 => 48,  132 => 45,  128 => 44,  122 => 41,  118 => 40,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  79 => 23,  74 => 22,  69 => 18,  64 => 15,  62 => 14,  59 => 13,  56 => 12,  50 => 11,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
