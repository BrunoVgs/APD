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

/* base.html.twig */
class __TwigTemplate_aa09839417eb68edad90c728ec120c52c5af9b9ef82c77d87487e9975592d775 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
     
     <!-- bootswatch 
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/minty/bootstrap.min.css\">
    -->
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <!-- Our custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/panini.css"), "html", null, true);
        echo "\">
    <!-- Fontawesome -->
    <script src=\"https://kit.fontawesome.com/c82b24b680.js\" crossorigin=\"anonymous\"></script>

    <title>";
        // line 22
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
    <body>

        <div class=\"main-container d-flex\">
            <div class=\"sidebar\" id=\"side_nav\">
                <div class=\"header-box px-2 pt-3 pb-4\">
                    <h1 class=\"fs-4\"><span class=\"bg-white text-dark rounded shadow px-2 me-2\">AP</span> <span class=\"text-white\">BackOffice <i class=\"fa-solid fa-futbol\"></i></span></h1>
                    
                </div>

                <ul class=\"list-unstyled px-3\">
                <li class\"\"> <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_team_index");
        echo "\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-sharp fa-solid fa-people-group\"></i> Equipes </a></li>
                <li class\"\"> <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_player_index");
        echo "\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-star\"></i> Joueurs </a></li>
                <li class\"\"> <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_article_index");
        echo "\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-newspaper\"></i> Articles </a></li>
                <li class\"\"> <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_user_index");
        echo "\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-user\"></i> Utilisateurs </a></li>
                </ul>
                <hr class=\"h-color mx-2\">

                <ul class=\"list-unstyled px-3\">
                <li class\"\"> <a href=\"#\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-bars\"></i> Paramètres </a></li>
                </ul>
                </div>
                    <div class=\"content\">
                    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
                        <div class=\"container-fluid\">
                            <a class=\"navbar-brand\" href=\"#\"> Administration de l'application</a>
                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                            </button>
                            
                            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                                <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Profile</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        </nav>
                    
                    </div>

            </div>
        </div>
    
        <!--: Bootstrap Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>

        

    
    </body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 22
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "BackOffice";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 22,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  70 => 22,  63 => 18,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
     
     <!-- bootswatch 
        <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/minty/bootstrap.min.css\">
    -->
    <!-- Bootstrap icons -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\">
    <!-- Our custom CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/panini.css') }}\">
    <!-- Fontawesome -->
    <script src=\"https://kit.fontawesome.com/c82b24b680.js\" crossorigin=\"anonymous\"></script>

    <title>{% block title %}BackOffice{% endblock %}</title>
</head>
    <body>

        <div class=\"main-container d-flex\">
            <div class=\"sidebar\" id=\"side_nav\">
                <div class=\"header-box px-2 pt-3 pb-4\">
                    <h1 class=\"fs-4\"><span class=\"bg-white text-dark rounded shadow px-2 me-2\">AP</span> <span class=\"text-white\">BackOffice <i class=\"fa-solid fa-futbol\"></i></span></h1>
                    
                </div>

                <ul class=\"list-unstyled px-3\">
                <li class\"\"> <a href=\"{{path ('app_back_team_index')}}\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-sharp fa-solid fa-people-group\"></i> Equipes </a></li>
                <li class\"\"> <a href=\"{{path ('app_back_player_index')}}\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-star\"></i> Joueurs </a></li>
                <li class\"\"> <a href=\"{{path ('app_back_article_index')}}\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-newspaper\"></i> Articles </a></li>
                <li class\"\"> <a href=\"{{path ('app_back_user_index')}}\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-user\"></i> Utilisateurs </a></li>
                </ul>
                <hr class=\"h-color mx-2\">

                <ul class=\"list-unstyled px-3\">
                <li class\"\"> <a href=\"#\" class=\"text-decoration-none px-3 py-1 d-block\"><i class=\"fa-solid fa-bars\"></i> Paramètres </a></li>
                </ul>
                </div>
                    <div class=\"content\">
                    <nav class=\"navbar navbar-expand-lg bg-body-tertiary\">
                        <div class=\"container-fluid\">
                            <a class=\"navbar-brand\" href=\"#\"> Administration de l'application</a>
                            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                            </button>
                            
                            <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mb-2 mb-lg-0\">
                                <li class=\"nav-item\">
                                <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Profile</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        </nav>
                    
                    </div>

            </div>
        </div>
    
        <!--: Bootstrap Bundle with Popper -->
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>

        

    
    </body>

</html>", "base.html.twig", "/var/www/html/Apothéose-APD/projet-album-panini-digital-back/templates/base.html.twig");
    }
}
