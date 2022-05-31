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

/* modules/custom/movie_directory/templates/movie-listing-theme.html.twig */
class __TwigTemplate_140cb945c518b24b8c241db4b70c7dcb23be8783b44330ecc41472bfc14a1105 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class='search'>
    Search bar
</div>

<div class='content'>
    Current page: ";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "data", [], "any", false, false, true, 6), "page", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
    <br/>
    Total pages: ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "data", [], "any", false, false, true, 8), "total_pages", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "
    <br/>
    Total matches: ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "data", [], "any", false, false, true, 10), "total_results", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
    <br/>
    Results:
    <ul id='movies-list'>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "data", [], "any", false, false, true, 14), "results", [], "any", false, false, true, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 15
            echo "        <li>
            <img src=\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "movie_poster_image_endpoint", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "poster_path", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\" />
            <br/>
            ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["movie"], "title", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</div>

<div class='pagination'>
    Pagination
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/movie_directory/templates/movie-listing-theme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  77 => 18,  70 => 16,  67 => 15,  63 => 14,  56 => 10,  51 => 8,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/movie_directory/templates/movie-listing-theme.html.twig", "/var/www/html/web/modules/custom/movie_directory/templates/movie-listing-theme.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 14);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
