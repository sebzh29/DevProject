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

/* home/index.html.twig */
class __TwigTemplate_93879270d60a1815f9f93a6f4690deaa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-start\">
                        <h1>Example headline.</h1>
                        <p class=\"opacity-75\">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-end\">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">First featurette heading. <span class=\"text-body-secondary\">It’ll blow your mind.</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Oh yeah, it’s that good. <span class=\"text-body-secondary\">See for yourself.</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-body-secondary\">Checkmate.</span></h2>
                <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
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
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%  extends 'base.html.twig' %}

{% block body %}

    <div id=\"myCarousel\" class=\"carousel slide mb-6\" data-bs-ride=\"carousel\">
        <div class=\"carousel-indicators\">
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
            <button type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
        </div>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-start\">
                        <h1>Example headline.</h1>
                        <p class=\"opacity-75\">Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption\">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class=\"carousel-item\">
                <svg class=\"bd-placeholder-img\" width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\" aria-hidden=\"true\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <div class=\"container\">
                    <div class=\"carousel-caption text-end\">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class=\"btn btn-lg btn-primary\" href=\"#\">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Previous</span>
        </button>
        <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#myCarousel\" data-bs-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"visually-hidden\">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class=\"container marketing\">

        <!-- Three columns of text below the carousel -->
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class=\"col-lg-4\">
                <svg class=\"bd-placeholder-img rounded-circle\" width=\"140\" height=\"140\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-color)\"/></svg>
                <h2 class=\"fw-normal\">Heading</h2>
                <p>And lastly this, the third column of representative placeholder content.</p>
                <p><a class=\"btn btn-secondary\" href=\"#\">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">First featurette heading. <span class=\"text-body-secondary\">It’ll blow your mind.</span></h2>
                <p class=\"lead\">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7 order-md-2\">
                <h2 class=\"featurette-heading fw-normal lh-1\">Oh yeah, it’s that good. <span class=\"text-body-secondary\">See for yourself.</span></h2>
                <p class=\"lead\">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class=\"col-md-5 order-md-1\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <div class=\"row featurette\">
            <div class=\"col-md-7\">
                <h2 class=\"featurette-heading fw-normal lh-1\">And lastly, this one. <span class=\"text-body-secondary\">Checkmate.</span></h2>
                <p class=\"lead\">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
            </div>
            <div class=\"col-md-5\">
                <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" role=\"img\" aria-label=\"Placeholder: 500x500\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"var(--bs-secondary-bg)\"/><text x=\"50%\" y=\"50%\" fill=\"var(--bs-secondary-color)\" dy=\".3em\">500x500</text></svg>
            </div>
        </div>

        <hr class=\"featurette-divider\">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->

{%  endblock %}





", "home/index.html.twig", "C:\\laragon\\www\\DevProject\\templates\\home\\index.html.twig");
    }
}
