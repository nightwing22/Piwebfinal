<?php

/* MainBundle:eshop:header.html.twig */
class __TwigTemplate_f78bc8970df001aae7318f6709bd1c16234a0759f21b1293f350dd7672985532 extends Twig_Template
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
        $__internal_5a1155f7f12ce96e8a7e55c15924ac246dddac67ead6c6a6057aa8320b933cbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a1155f7f12ce96e8a7e55c15924ac246dddac67ead6c6a6057aa8320b933cbc->enter($__internal_5a1155f7f12ce96e8a7e55c15924ac246dddac67ead6c6a6057aa8320b933cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:header.html.twig"));

        $__internal_cb0a4303d41babdf3f9e5e50af1d11af9e446f65565d68a749ba9ac309dc9c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0a4303d41babdf3f9e5e50af1d11af9e446f65565d68a749ba9ac309dc9c04->enter($__internal_cb0a4303d41babdf3f9e5e50af1d11af9e446f65565d68a749ba9ac309dc9c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MainBundle:eshop:header.html.twig"));

        // line 1
        echo "<div class=\"navbar navbar-tshop navbar-fixed-top megamenu\" role=\"navigation\">
    <div class=\"navbar-top\">
        ";
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 4
            echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\" style=\"margin-left:5px\"> +216 41747037 </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">
                                <li><a href=\"account-1.html\"><span class=\"hidden-xs\"> My Account</span> <i class=\"glyphicon glyphicon-user hide visible-xs \"></i></a></li>


                                <li class=\"dropdown hasUserMenu\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <i class=\"glyphicon glyphicon-log-in hide visible-xs \"></i> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\"></i> Account</a></li>
                                        <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><i class=\"fa fa fa-cog\"></i> Profile</a></li>
                                        <li><a href=\"my-address.html\"><i class=\"fa fa-map-marker\"></i> Addresses</a></li>

                                        <li><a href=\"wishlist.html\" title=\"My wishlists\">
                                                <i class=\"fa fa-heart\"></i>
                                                My wishlists
                                            </a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa  fa-sign-out\"></i> Déconnexion</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        ";
        } else {
            // line 44
            echo "            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i
                                                class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i
                                                    class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\"
                                                                                                             style=\"margin-left:5px\"> +216 41747037</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">

                                <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\" > <span class=\"hidden-xs\">Se Connecter</span>
                                <li><a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\" > <span class=\"hidden-xs\">Inscription</span>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 71
        echo "    </div>
    <!--/.navbar-top-->

    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                        class=\"icon-bar\"> </span> <span class=\"icon-bar\"> </span></button>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                        class=\"fa fa-shopping-cart colorWhite\"> </i> <span
                        class=\"cartRespons colorWhite\"> Cart (\$210.00) </span></button>
            <a class=\"navbar-brand \" href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("main_homepage");
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/logo.png"), "html", null, true);
        echo "\" alt=\"TSHOP\"> </a>

            <!-- this part for mobile -->

        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class=\"navbar-cart  collapse\">
            <div class=\"cartMenu  col-lg-4 col-xs-12 col-md-4 \">

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"\"><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\"> Les membres
                    </a></li>
                <li class=\"\"><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("venteflash_list");
        echo "\"><i class=\"fa fa-fw fa-clock-o\"></i> les ventes flash </a></li>
                <li class=\"\"><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\"><i class=\"fa fa-fw fa-bank\"></i> les  produits </a></li>
                <li class=\"\"><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("coupon_list");
        echo "\"><i class=\"fa fa-fw fa-sticky-note\"></i> les coupons </a></li>
                <li class=\"\"><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Magasin_List");
        echo "\"><i class=\"fa fa-fw fa-home\"></i> les magazins </a></li>



                <li class=\"dropdown megamenu-fullwidth\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> New
                        Products <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content \">
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl\">
                                <li class=\"no-border\">
                                    <p class=\"promo-1\"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href=\"category.html\"> ALL NEW PRODUCTS </a></li>
                                <li><a href=\"category.html\"> NEW TOPS </a></li>
                                <li><a href=\"category.html\"> NEW SHOES </a></li>
                                <li><a href=\"category.html\"> NEW TSHIRT </a></li>
                                <li><a href=\"category.html\"> NEW TSHOP </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3  col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo1.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> JEANS </span>
                                    </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo2.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i
                                                    class=\"fa fa-caret-right\"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/promo3.jpg"), "html", null, true);
        echo "\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> SHOES </span>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class=\"dropdown megamenu-80width \"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> SHOP
                        <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content\">

                            <!-- megamenu-content -->

                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft\">
                                <li>
                                    <p><strong> Women Collection </strong></p>
                                </li>
                                <li><a href=\"#\"> Kameez </a></li>
                                <li><a href=\"#\"> Tops </a></li>
                                <li><a href=\"#\"> Shoes </a></li>
                                <li><a href=\"#\"> T shirt </a></li>
                                <li><a href=\"#\"> TSHOP </a></li>
                                <li><a href=\"#\"> Party Dress </a></li>
                                <li><a href=\"#\"> Women Fragrances </a></li>
                            </ul>
                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled\">
                                <li>
                                    <p><strong> Men Collection </strong></p>
                                </li>
                                <li><a href=\"#\"> Panjabi </a></li>
                                <li><a href=\"#\"> Male Fragrances </a></li>
                                <li><a href=\"#\"> Scarf </a></li>
                                <li><a href=\"#\"> Sandal </a></li>
                                <li><a href=\"#\"> Underwear </a></li>
                                <li><a href=\"#\"> Winter Collection </a></li>
                                <li><a href=\"#\"> Men Accessories </a></li>
                            </ul>
                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled\">
                                <li>
                                    <p><strong> Top Brands </strong></p>
                                </li>
                                <li><a href=\"#\"> Diesel </a></li>
                                <li><a href=\"#\"> Farah </a></li>
                                <li><a href=\"#\"> G-Star RAW </a></li>
                                <li><a href=\"#\"> Lyle & Scott </a></li>
                                <li><a href=\"#\"> Pretty Green </a></li>
                                <li><a href=\"#\"> TSHOP </a></li>
                                <li><a href=\"#\"> TANJIM </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-6\">
                                <li class=\"no-margin productPopItem \"><a href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/g4.jpg"), "html", null, true);
        echo "\" alt=\"img\"> </a> <a
                                            class=\"text-center productInfo alpha90\" href=\"product-details.html\"> Eodem modo
                                        typi <br>
                                        <span> \$60 </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-6\">
                                <li class=\"no-margin productPopItem relative\"><a href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/eshop/images/site/g5.jpg"), "html", null, true);
        echo "\" alt=\"img\"> </a> <a
                                            class=\"text-center productInfo alpha90\" href=\"product-details.html\"> Eodem modo
                                        typi <br>
                                        <span> \$60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>


            </ul>


            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <!--/.search-full-->

</div> <br><br>";
        
        $__internal_5a1155f7f12ce96e8a7e55c15924ac246dddac67ead6c6a6057aa8320b933cbc->leave($__internal_5a1155f7f12ce96e8a7e55c15924ac246dddac67ead6c6a6057aa8320b933cbc_prof);

        
        $__internal_cb0a4303d41babdf3f9e5e50af1d11af9e446f65565d68a749ba9ac309dc9c04->leave($__internal_cb0a4303d41babdf3f9e5e50af1d11af9e446f65565d68a749ba9ac309dc9c04_prof);

    }

    public function getTemplateName()
    {
        return "MainBundle:eshop:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 197,  270 => 190,  213 => 136,  204 => 130,  195 => 124,  172 => 104,  168 => 103,  164 => 102,  160 => 101,  155 => 99,  133 => 82,  120 => 71,  109 => 63,  105 => 62,  85 => 44,  70 => 32,  59 => 24,  55 => 23,  50 => 21,  31 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"navbar navbar-tshop navbar-fixed-top megamenu\" role=\"navigation\">
    <div class=\"navbar-top\">
        {% if is_granted('ROLE_USER') %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\" style=\"margin-left:5px\"> +216 41747037 </span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">
                                <li><a href=\"account-1.html\"><span class=\"hidden-xs\"> My Account</span> <i class=\"glyphicon glyphicon-user hide visible-xs \"></i></a></li>


                                <li class=\"dropdown hasUserMenu\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"> <i class=\"glyphicon glyphicon-log-in hide visible-xs \"></i> {{ app.user.username}} <b class=\"caret\"></b></a>
                                    <ul class=\"dropdown-menu\">
                                        <li><a href=\"{{ path('fos_user_profile_edit') }}\"></i> Account</a></li>
                                        <li><a href=\"{{ path('fos_user_profile_show') }}\"><i class=\"fa fa fa-cog\"></i> Profile</a></li>
                                        <li><a href=\"my-address.html\"><i class=\"fa fa-map-marker\"></i> Addresses</a></li>

                                        <li><a href=\"wishlist.html\" title=\"My wishlists\">
                                                <i class=\"fa fa-heart\"></i>
                                                My wishlists
                                            </a></li>
                                        <li class=\"divider\"></li>
                                        <li><a href=\"{{ path('fos_user_security_logout') }}\"><i class=\"fa  fa-sign-out\"></i> Déconnexion</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>


        {% else %}
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6\">
                        <div class=\"pull-left \">
                            <ul class=\"userMenu \">
                                <li><a href=\"#\"> <span class=\"hidden-xs\">HELP</span><i
                                                class=\"glyphicon glyphicon-info-sign hide visible-xs \"></i> </a></li>
                                <li class=\"phone-number\"><a href=\"callto:+216 41747037\"> <span> <i
                                                    class=\"glyphicon glyphicon-phone-alt \"></i></span> <span class=\"hidden-xs\"
                                                                                                             style=\"margin-left:5px\"> +216 41747037</span>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding\">
                        <div class=\"pull-right\">
                            <ul class=\"userMenu\">

                                <li><a href=\"{{ path('fos_user_security_login') }}\" > <span class=\"hidden-xs\">Se Connecter</span>
                                <li><a href=\"{{ path('fos_user_registration_register') }}\" > <span class=\"hidden-xs\">Inscription</span>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>
    <!--/.navbar-top-->

    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\"><span
                        class=\"sr-only\"> Toggle navigation </span> <span class=\"icon-bar\"> </span> <span
                        class=\"icon-bar\"> </span> <span class=\"icon-bar\"> </span></button>
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-cart\"><i
                        class=\"fa fa-shopping-cart colorWhite\"> </i> <span
                        class=\"cartRespons colorWhite\"> Cart (\$210.00) </span></button>
            <a class=\"navbar-brand \" href=\"{{path('main_homepage')}}\"> <img src=\"{{asset('bundles/eshop/images/logo.png')}}\" alt=\"TSHOP\"> </a>

            <!-- this part for mobile -->

        </div>

        <!-- this part is duplicate from cartMenu  keep it for mobile -->
        <div class=\"navbar-cart  collapse\">
            <div class=\"cartMenu  col-lg-4 col-xs-12 col-md-4 \">

            </div>
            <!--/.cartMenu-->
        </div>
        <!--/.navbar-cart-->

        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"\"><a href=\"{{ path('user_index') }}\"> Les membres
                    </a></li>
                <li class=\"\"><a href=\"{{ path('venteflash_list') }}\"><i class=\"fa fa-fw fa-clock-o\"></i> les ventes flash </a></li>
                <li class=\"\"><a href=\"{{ path('product_index') }}\"><i class=\"fa fa-fw fa-bank\"></i> les  produits </a></li>
                <li class=\"\"><a href=\"{{ path('coupon_list') }}\"><i class=\"fa fa-fw fa-sticky-note\"></i> les coupons </a></li>
                <li class=\"\"><a href=\"{{ path('Magasin_List') }}\"><i class=\"fa fa-fw fa-home\"></i> les magazins </a></li>



                <li class=\"dropdown megamenu-fullwidth\"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> New
                        Products <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content \">
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl\">
                                <li class=\"no-border\">
                                    <p class=\"promo-1\"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href=\"category.html\"> ALL NEW PRODUCTS </a></li>
                                <li><a href=\"category.html\"> NEW TOPS </a></li>
                                <li><a href=\"category.html\"> NEW SHOES </a></li>
                                <li><a href=\"category.html\"> NEW TSHIRT </a></li>
                                <li><a href=\"category.html\"> NEW TSHOP </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3  col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo1.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> JEANS </span>
                                    </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo2.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i
                                                    class=\"fa fa-caret-right\"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-4\">
                                <li><a class=\"newProductMenuBlock\" href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/promo3.jpg')}}\" alt=\"product\"> <span
                                                class=\"ProductMenuCaption\"> <i class=\"fa fa-caret-right\"> </i> SHOES </span>
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!-- change width of megamenu = use class > megamenu-fullwidth, megamenu-60width, megamenu-40width -->
                <li class=\"dropdown megamenu-80width \"><a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\"> SHOP
                        <b class=\"caret\"> </b> </a>
                    <ul class=\"dropdown-menu\">
                        <li class=\"megamenu-content\">

                            <!-- megamenu-content -->

                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled noMarginLeft\">
                                <li>
                                    <p><strong> Women Collection </strong></p>
                                </li>
                                <li><a href=\"#\"> Kameez </a></li>
                                <li><a href=\"#\"> Tops </a></li>
                                <li><a href=\"#\"> Shoes </a></li>
                                <li><a href=\"#\"> T shirt </a></li>
                                <li><a href=\"#\"> TSHOP </a></li>
                                <li><a href=\"#\"> Party Dress </a></li>
                                <li><a href=\"#\"> Women Fragrances </a></li>
                            </ul>
                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled\">
                                <li>
                                    <p><strong> Men Collection </strong></p>
                                </li>
                                <li><a href=\"#\"> Panjabi </a></li>
                                <li><a href=\"#\"> Male Fragrances </a></li>
                                <li><a href=\"#\"> Scarf </a></li>
                                <li><a href=\"#\"> Sandal </a></li>
                                <li><a href=\"#\"> Underwear </a></li>
                                <li><a href=\"#\"> Winter Collection </a></li>
                                <li><a href=\"#\"> Men Accessories </a></li>
                            </ul>
                            <ul class=\"col-lg-2  col-sm-2 col-md-2  unstyled\">
                                <li>
                                    <p><strong> Top Brands </strong></p>
                                </li>
                                <li><a href=\"#\"> Diesel </a></li>
                                <li><a href=\"#\"> Farah </a></li>
                                <li><a href=\"#\"> G-Star RAW </a></li>
                                <li><a href=\"#\"> Lyle & Scott </a></li>
                                <li><a href=\"#\"> Pretty Green </a></li>
                                <li><a href=\"#\"> TSHOP </a></li>
                                <li><a href=\"#\"> TANJIM </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-6\">
                                <li class=\"no-margin productPopItem \"><a href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/g4.jpg')}}\" alt=\"img\"> </a> <a
                                            class=\"text-center productInfo alpha90\" href=\"product-details.html\"> Eodem modo
                                        typi <br>
                                        <span> \$60 </span> </a></li>
                            </ul>
                            <ul class=\"col-lg-3  col-sm-3 col-md-3 col-xs-6\">
                                <li class=\"no-margin productPopItem relative\"><a href=\"product-details.html\"> <img
                                                class=\"img-responsive\" src=\"{{asset('bundles/eshop/images/site/g5.jpg')}}\" alt=\"img\"> </a> <a
                                            class=\"text-center productInfo alpha90\" href=\"product-details.html\"> Eodem modo
                                        typi <br>
                                        <span> \$60 </span> </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


            </ul>


            </ul>


            <!--/.navbar-nav hidden-xs-->
        </div>
        <!--/.nav-collapse -->

    </div>
    <!--/.container -->

    <!--/.search-full-->

</div> <br><br>", "MainBundle:eshop:header.html.twig", "C:\\wamp64\\www\\test\\src\\MainBundle/Resources/views/eshop/header.html.twig");
    }
}