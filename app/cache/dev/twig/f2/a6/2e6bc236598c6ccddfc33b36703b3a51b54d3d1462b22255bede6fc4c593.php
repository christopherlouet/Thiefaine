<?php

/* ThiefaineReferentielBundle:Information:clone.html.twig */
class __TwigTemplate_f2a62e6bc236598c6ccddfc33b36703b3a51b54d3d1462b22255bede6fc4c593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ThiefaineUserBundle::layout.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'modal' => array($this, 'block_modal'),
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
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/message.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/ckeditor.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/js/datepicker.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thiefainereferentiel/lib/bootstrap_filestyle/src/bootstrap-filestyle.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
    ";
        // line 14
        $context["flashMessages"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method");
        // line 15
        echo "
    <div class=\"content col-md-9\">
        
        <h3>Cloner l'information «";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["information"]) ? $context["information"] : $this->getContext($context, "information")), "titre"), "html", null, true);
        echo "»</h1>

        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'errors');
        echo "

            <div class=\"form-group\">

                <p>
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "titre"), 'label');
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "titre"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urlphoto"), 'label');
        echo "
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urlphoto"), 'widget');
        echo "
                    <a class=\"btn btn-default showImage\" style=\"width:100%;\">Visualiser l'image</a>
                </p>
                <p>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "attachement"), 'label');
        echo "
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "attachement"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urllien"), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "urllien"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "zone"), 'label');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "zone"), 'widget');
        echo "
                </p>
                <p class=\"dateElement\">
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "datevalidite"), 'label');
        echo "
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "datevalidite"), 'widget');
        echo "
                </p>
                <p>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "message"), 'label');
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "message"), 'widget');
        echo "
                </p>
                <p class=\"list-form-control\">
                    <label>Notifications</label>
                    <table class=\"table table-hover\">
                        <tr>
                            <td>
                                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "alerte"), 'label');
        echo "
                            </td>
                            <td style=\"text-align: right;\">
                                ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), "alerte"), 'widget');
        echo "
                            </td>
                        </tr>
                    </table>
                </p>

                <p> 
                    <button class=\"btn btn-primary\" type=\"submit\">Cloner l'information</button>
   
                    <a class=\"btn btn-default\" href=";
        // line 72
        echo $this->env->getExtension('routing')->getPath("information");
        echo ">Annuler</a>
                </p>

            </div>

        ";
        // line 77
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["clone_form"]) ? $context["clone_form"] : $this->getContext($context, "clone_form")), 'form_end');
        echo "

        ";
        // line 79
        if ((twig_length_filter($this->env, (isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages"))) > 0)) {
            // line 80
            echo "        <p>
        <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["flashMessages"]) ? $context["flashMessages"] : $this->getContext($context, "flashMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 83
                echo "                <div class=\"flash-notice\">
                    ";
                // line 84
                echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        </div>
        </p>
        ";
        }
        // line 90
        echo "
    </div>


";
    }

    // line 96
    public function block_modal($context, array $blocks = array())
    {
        // line 97
        echo "    <div id=\"showImageModal\" class=\"modal fade\">
      <div class=\"modal-dialog\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">
                <span aria-hidden=\"true\">&times;</span>
                <span class=\"sr-only\">Fermer</span>
            </button>
            <h4 class=\"modal-title\">Visualisation de l'image</h4>
          </div>
          <div class=\"modal-body\">
            
          </div>
          <div class=\"modal-footer\">
            <a class=\"showFull btn btn-default\" type=\"button\">
                Zoom
                <span class=\"glyphicon glyphicon-resize-full\"></span>
            </a>
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
          </div>
        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ThiefaineReferentielBundle:Information:clone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 97,  228 => 96,  220 => 90,  215 => 87,  206 => 84,  203 => 83,  199 => 82,  195 => 80,  193 => 79,  188 => 77,  180 => 72,  168 => 63,  162 => 60,  152 => 53,  148 => 52,  142 => 49,  138 => 48,  132 => 45,  128 => 44,  122 => 41,  118 => 40,  112 => 37,  108 => 36,  101 => 32,  97 => 31,  91 => 28,  87 => 27,  79 => 22,  74 => 20,  69 => 18,  64 => 15,  62 => 14,  59 => 13,  56 => 12,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  33 => 4,  30 => 3,);
    }
}
