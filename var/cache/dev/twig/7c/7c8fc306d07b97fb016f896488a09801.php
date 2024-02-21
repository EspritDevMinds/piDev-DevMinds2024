<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/index.html.twig */
class __TwigTemplate_219436da9097e821c7df905c388e267d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <body>
    <div class=\"hero_area\">

        <!-- slider section -->
        <section class=\" slider_section position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Nutririon
                                        </h2>
                                        <h1>
                                            Nutrifit
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Us section -->

    <section class=\"us_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Why Choose Us
                </h2>
            </div>

            <div class=\"us_container \">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        QUALITY EQUIPMENT
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-4.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        NUTRITION
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-2.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            <div class=\"detail-box\">
                                <h5>
                                    HEALTHY DIET PLAN
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"box\">
                            <div class=\"img-box\">
                                <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/u-3.png"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"detail-box\">
                                <h5>
                                    SPORT TRAINING
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->


    <!-- heathy section -->

    <section class=\"heathy_section layout_padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-12 mx-auto\">
                    <div class=\"detail-box\">
                        <h2>
                            HEALTHY MIND, HEALTHY BODY
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        </p>
                        <div class=\"btn-box\">
                            <a href=\"\">
                                READ MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end heathy section -->

<!-- trainer section -->
<section class=\"trainer_section layout_padding bg-dark text-white\">
    <div class=\"container\">
        <div class=\"heading_container text-center\">
            <h2 class=\"text-white\">
                Our Latest Offers
            </h2>
        </div>
        <div class=\"row\">
            ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 279, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 280
            echo "            <div class=\"col-lg-4 col-md-6 mx-auto\">
                <div class=\"card bg-secondary text-white mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "description", [], "any", false, false, false, 283), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Tags: ";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "tags", [], "any", false, false, false, 284), "html", null, true);
            echo "</p>
                        <p class=\"card-text\">Price: \$";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "prix", [], "any", false, false, false, 285), "html", null, true);
            echo "</p>
                        <a href=\"";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_offres_show", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 286)]), "html", null, true);
            echo "\">show</a>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 291
        echo "        </div>
    </div>
</section>

<section class=\"promotion_section layout_padding bg-dark text-white\">
    <div class=\"container\">
        <div class=\"heading_container text-center\">
            <h2 class=\"text-white\">
                Our Latest Promotions
            </h2>
        </div>
        <div class=\"row\">
            ";
        // line 303
        if (twig_test_empty((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 303, $this->source); })()))) {
            // line 304
            echo "                <p class=\"text-white\">No promotions available at the moment.</p>
            ";
        } else {
            // line 306
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) || array_key_exists("promotions", $context) ? $context["promotions"] : (function () { throw new RuntimeError('Variable "promotions" does not exist.', 306, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                // line 307
                echo "                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"card bg-secondary text-white mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Code: ";
                // line 310
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "codePromotion", [], "any", false, false, false, 310), "html", null, true);
                echo "</h5>
                            <p class=\"card-text\">Reduction: ";
                // line 311
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "reductionPromotion", [], "any", false, false, false, 311), "html", null, true);
                echo "%</p>
                            <p class=\"card-text\">Expiration: ";
                // line 312
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "dateExpiration", [], "any", false, false, false, 312), "Y-m-d"), "html", null, true);
                echo "</p>
                            ";
                // line 314
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_promotion_show", ["id" => twig_get_attribute($this->env, $this->source, $context["promotion"], "id", [], "any", false, false, false, 314)]), "html", null, true);
                echo "\">Details</a>
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "            ";
        }
        // line 320
        echo "        </div>
    </div>
</section>





    <!-- end trainer section -->
    <!-- Nutritionist section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Nutritionists
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                DR.lola lili
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/nut3.webp"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/facebook-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/twitter.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"";
        // line 405
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/instagram-logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->

    <section class=\"contact_section \">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 px-0\">
                    <div class=\"img-box\">
                        <img src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/images/contact-img.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"form_container pr-0 pr-lg-5 mr-0 mr-lg-2\">
                        <div class=\"heading_container\">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action=\"\">
                            <div>
                                <input type=\"text\" placeholder=\"Name\" />
                            </div>
                            <div>
                                <input type=\"email\" placeholder=\"Email\" />
                            </div>
                            <div>
                                <input type=\"text\" placeholder=\"Phone Number\" />
                            </div>
                            <div>
                                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
                            </div>
                            <div class=\"d-flex \">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->
    <!-- info section -->
    <section class=\"info_section layout_padding2\">
        <div class=\"container\">
            <div class=\"info_items\">
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-1\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Tunisia
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-2\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                +216 95 155 506
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-3\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Nutrifit@gmail.com
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer class=\"container-fluid footer_section\">
            <p>
                &copy; 2024 All Rights Reserved.
            </p>
        </footer>
    </section>

    <!-- end info_section -->




    <script src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./FrontOffice/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

    </body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  700 => 513,  696 => 512,  602 => 421,  583 => 405,  577 => 402,  571 => 399,  564 => 395,  547 => 381,  541 => 378,  535 => 375,  528 => 371,  511 => 357,  505 => 354,  499 => 351,  492 => 347,  463 => 320,  460 => 319,  448 => 314,  444 => 312,  440 => 311,  436 => 310,  431 => 307,  426 => 306,  422 => 304,  420 => 303,  406 => 291,  395 => 286,  391 => 285,  387 => 284,  383 => 283,  378 => 280,  374 => 279,  314 => 222,  296 => 207,  278 => 192,  260 => 177,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <body>
    <div class=\"hero_area\">

        <!-- slider section -->
        <section class=\" slider_section position-relative\">
            <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Nutririon
                                        </h2>
                                        <h1>
                                            Nutrifit
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item\">
                        <div class=\"container\">
                            <div class=\"col-lg-10 col-md-11 mx-auto\">
                                <div class=\"detail-box\">
                                    <div>
                                        <h3>
                                            Fitness
                                        </h3>
                                        <h2>
                                            Training
                                        </h2>
                                        <h1>
                                            Neogym
                                        </h1>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse .
                                        </p>
                                        <div class=\"\">
                                            <a href=\"\">
                                                Contact Us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
                    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"4\"></li>
                </ol>
            </div>
        </section>
        <!-- end slider section -->
    </div>


    <!-- Us section -->

    <section class=\"us_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Why Choose Us
                </h2>
            </div>

            <div class=\"us_container \">
                    <div class=\"row\">
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-1.png') }}\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        QUALITY EQUIPMENT
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-4.png') }}\" alt=\"\">
                                </div>
                                <div class=\"detail-box\">
                                    <h5>
                                        NUTRITION
                                    </h5>
                                    <p>
                                        ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-3 col-md-6\">
                            <div class=\"box\">
                                <div class=\"img-box\">
                                    <img src=\"{{ asset('./FrontOffice/images/u-2.png') }}\" alt=\"\">
                                </div>
                            <div class=\"detail-box\">
                                <h5>
                                    HEALTHY DIET PLAN
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"box\">
                            <div class=\"img-box\">
                                <img src=\"{{ asset('./FrontOffice/images/u-3.png') }}\" alt=\"\">
                            </div>
                            <div class=\"detail-box\">
                                <h5>
                                    SPORT TRAINING
                                </h5>
                                <p>
                                    ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end us section -->


    <!-- heathy section -->

    <section class=\"heathy_section layout_padding\">
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-12 mx-auto\">
                    <div class=\"detail-box\">
                        <h2>
                            HEALTHY MIND, HEALTHY BODY
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                        </p>
                        <div class=\"btn-box\">
                            <a href=\"\">
                                READ MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- end heathy section -->

<!-- trainer section -->
<section class=\"trainer_section layout_padding bg-dark text-white\">
    <div class=\"container\">
        <div class=\"heading_container text-center\">
            <h2 class=\"text-white\">
                Our Latest Offers
            </h2>
        </div>
        <div class=\"row\">
            {% for offre in offres %}
            <div class=\"col-lg-4 col-md-6 mx-auto\">
                <div class=\"card bg-secondary text-white mb-4\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ offre.description }}</h5>
                        <p class=\"card-text\">Tags: {{ offre.tags }}</p>
                        <p class=\"card-text\">Price: \${{ offre.prix }}</p>
                        <a href=\"{{ path('app_offres_show', {'id': offre.id}) }}\">show</a>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</section>

<section class=\"promotion_section layout_padding bg-dark text-white\">
    <div class=\"container\">
        <div class=\"heading_container text-center\">
            <h2 class=\"text-white\">
                Our Latest Promotions
            </h2>
        </div>
        <div class=\"row\">
            {% if promotions is empty %}
                <p class=\"text-white\">No promotions available at the moment.</p>
            {% else %}
                {% for promotion in promotions %}
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"card bg-secondary text-white mb-4\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Code: {{ promotion.codePromotion }}</h5>
                            <p class=\"card-text\">Reduction: {{ promotion.reductionPromotion }}%</p>
                            <p class=\"card-text\">Expiration: {{ promotion.dateExpiration|date('Y-m-d') }}</p>
                            {# Assuming you have a route named 'promotion_show' for showing promotion details #}
                            <a href=\"{{ path('app_promotion_show', {'id': promotion.id}) }}\">Details</a>
                        </div>
                    </div>
                </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</section>





    <!-- end trainer section -->
    <!-- Nutritionist section -->

    <section class=\"trainer_section layout_padding\">
        <div class=\"container\">
            <div class=\"heading_container\">
                <h2>
                    Our Nutritionists
                </h2>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                DR.lola lili
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut1.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Jean Doe
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut2.jpg') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
                <div class=\"col-lg-4 col-md-6 mx-auto\">
                    <div class=\"box\">
                        <div class=\"name\">
                            <h5>
                                Alex Den
                            </h5>
                        </div>
                        <div class=\"img-box\">
                            <img src=\"{{ asset('./FrontOffice/images/nut3.webp') }}\" alt=\"\">
                        </div>
                        <div class=\"social_box\">
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/facebook-logo.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/twitter.png') }}\" alt=\"\">
                            </a>
                            <a href=\"\">
                                <img src=\"{{ asset('./FrontOffice/images/instagram-logo.png') }}\" alt=\"\">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section -->

    <section class=\"contact_section \">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-md-6 px-0\">
                    <div class=\"img-box\">
                        <img src=\"{{ asset('./FrontOffice/images/contact-img.jpg') }}\" alt=\"\">
                    </div>
                </div>
                <div class=\"col-lg-5 col-md-6\">
                    <div class=\"form_container pr-0 pr-lg-5 mr-0 mr-lg-2\">
                        <div class=\"heading_container\">
                            <h2>
                                Contact Us
                            </h2>
                        </div>
                        <form action=\"\">
                            <div>
                                <input type=\"text\" placeholder=\"Name\" />
                            </div>
                            <div>
                                <input type=\"email\" placeholder=\"Email\" />
                            </div>
                            <div>
                                <input type=\"text\" placeholder=\"Phone Number\" />
                            </div>
                            <div>
                                <input type=\"text\" class=\"message-box\" placeholder=\"Message\" />
                            </div>
                            <div class=\"d-flex \">
                                <button>
                                    Send
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end contact section -->
    <!-- info section -->
    <section class=\"info_section layout_padding2\">
        <div class=\"container\">
            <div class=\"info_items\">
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-1\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Tunisia
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-2\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                +216 95 155 506
                            </p>
                        </div>
                    </div>
                </a>
                <a href=\"\">
                    <div class=\"item \">
                        <div class=\"img-box box-3\">
                            <img src=\"\" alt=\"\">
                        </div>
                        <div class=\"detail-box\">
                            <p>
                                Nutrifit@gmail.com
                            </p>

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer class=\"container-fluid footer_section\">
            <p>
                &copy; 2024 All Rights Reserved.
            </p>
        </footer>
    </section>

    <!-- end info_section -->




    <script src=\"{{ asset('./FrontOffice/js/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"{{ asset('./FrontOffice/js/bootstrap.js') }}\"></script>

    </body>

{% endblock %}
", "main/index.html.twig", "C:\\Users\\fujit\\OneDrive\\Bureau\\PiDev-DevMinds2024-main\\templates\\main\\index.html.twig");
    }
}
