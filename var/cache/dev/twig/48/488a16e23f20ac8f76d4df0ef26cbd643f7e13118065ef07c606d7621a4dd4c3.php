<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_2baaffb7dcd75e92e0bf735a65de45fade32c3cbe3cf8be00d96499ece24cefc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MainBundle:eshop:main.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MainBundle:eshop:main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_911ce07bdcbd142f46580ce601274132ce4b7aefcb603be3e0f6b3a115b6e687 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_911ce07bdcbd142f46580ce601274132ce4b7aefcb603be3e0f6b3a115b6e687->enter($__internal_911ce07bdcbd142f46580ce601274132ce4b7aefcb603be3e0f6b3a115b6e687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_cc97c66a1e4ce904cb6d6604baa56371ae0eb5a233f04a14cddb8a2c440e4449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc97c66a1e4ce904cb6d6604baa56371ae0eb5a233f04a14cddb8a2c440e4449->enter($__internal_cc97c66a1e4ce904cb6d6604baa56371ae0eb5a233f04a14cddb8a2c440e4449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_911ce07bdcbd142f46580ce601274132ce4b7aefcb603be3e0f6b3a115b6e687->leave($__internal_911ce07bdcbd142f46580ce601274132ce4b7aefcb603be3e0f6b3a115b6e687_prof);

        
        $__internal_cc97c66a1e4ce904cb6d6604baa56371ae0eb5a233f04a14cddb8a2c440e4449->leave($__internal_cc97c66a1e4ce904cb6d6604baa56371ae0eb5a233f04a14cddb8a2c440e4449_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6dd329b6d4e92ec82bf267fd798079c323e89ad86ed9131bd50b8a34e7ce02b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dd329b6d4e92ec82bf267fd798079c323e89ad86ed9131bd50b8a34e7ce02b->enter($__internal_d6dd329b6d4e92ec82bf267fd798079c323e89ad86ed9131bd50b8a34e7ce02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc0bf6871e0248bb696042443d896c595cbdcc6107c5128ab664b93dc48450e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0bf6871e0248bb696042443d896c595cbdcc6107c5128ab664b93dc48450e2->enter($__internal_fc0bf6871e0248bb696042443d896c595cbdcc6107c5128ab664b93dc48450e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/bootstrap/css/login.add.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


";
        
        $__internal_fc0bf6871e0248bb696042443d896c595cbdcc6107c5128ab664b93dc48450e2->leave($__internal_fc0bf6871e0248bb696042443d896c595cbdcc6107c5128ab664b93dc48450e2_prof);

        
        $__internal_d6dd329b6d4e92ec82bf267fd798079c323e89ad86ed9131bd50b8a34e7ce02b->leave($__internal_d6dd329b6d4e92ec82bf267fd798079c323e89ad86ed9131bd50b8a34e7ce02b_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_730aabbc4b15df6659c8e96ef81ee9f886f356d948fbb2c2f54e6696318d42e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_730aabbc4b15df6659c8e96ef81ee9f886f356d948fbb2c2f54e6696318d42e7->enter($__internal_730aabbc4b15df6659c8e96ef81ee9f886f356d948fbb2c2f54e6696318d42e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b9b5c52ae100adbccd92f131c95669b67f228b85d69538b402e48065e6adf109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b5c52ae100adbccd92f131c95669b67f228b85d69538b402e48065e6adf109->enter($__internal_b9b5c52ae100adbccd92f131c95669b67f228b85d69538b402e48065e6adf109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 24
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 25
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "
        <div>
            ";
        // line 32
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 34
        echo "        </div></div>

    <br><br>
";
        
        $__internal_b9b5c52ae100adbccd92f131c95669b67f228b85d69538b402e48065e6adf109->leave($__internal_b9b5c52ae100adbccd92f131c95669b67f228b85d69538b402e48065e6adf109_prof);

        
        $__internal_730aabbc4b15df6659c8e96ef81ee9f886f356d948fbb2c2f54e6696318d42e7->leave($__internal_730aabbc4b15df6659c8e96ef81ee9f886f356d948fbb2c2f54e6696318d42e7_prof);

    }

    // line 32
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2c449766d4358c1cedaa40f768ebedea6ae2a6516718455ff9c6647c36a60366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c449766d4358c1cedaa40f768ebedea6ae2a6516718455ff9c6647c36a60366->enter($__internal_2c449766d4358c1cedaa40f768ebedea6ae2a6516718455ff9c6647c36a60366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4fa51f65838a23ada360eb4874610be15b09387f4e05b88edabdbb60d1a0ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa51f65838a23ada360eb4874610be15b09387f4e05b88edabdbb60d1a0ccf9->enter($__internal_4fa51f65838a23ada360eb4874610be15b09387f4e05b88edabdbb60d1a0ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 33
        echo "            ";
        
        $__internal_4fa51f65838a23ada360eb4874610be15b09387f4e05b88edabdbb60d1a0ccf9->leave($__internal_4fa51f65838a23ada360eb4874610be15b09387f4e05b88edabdbb60d1a0ccf9_prof);

        
        $__internal_2c449766d4358c1cedaa40f768ebedea6ae2a6516718455ff9c6647c36a60366->leave($__internal_2c449766d4358c1cedaa40f768ebedea6ae2a6516718455ff9c6647c36a60366_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 33,  163 => 32,  150 => 34,  148 => 32,  144 => 30,  141 => 29,  135 => 28,  126 => 25,  121 => 24,  116 => 23,  111 => 22,  109 => 21,  105 => 19,  97 => 17,  91 => 14,  87 => 13,  82 => 12,  79 => 11,  70 => 10,  56 => 6,  51 => 5,  42 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"MainBundle:eshop:main.html.twig\" %}


{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{asset('bundles/eshop/bootstrap/css/login.add.css')}}\" rel=\"stylesheet\">


{% endblock %}
{% block content %}
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div></div>

    <br><br>
{% endblock %}
", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Nouveau dossier (4)\\src\\MainBundle/Resources/views/layout.html.twig");
    }
}
