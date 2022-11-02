<?php

/* calc.html */
class __TwigTemplate_c7cb16bdb247bf6c875ebc63b7b403494d6163e1f5b5747d1d3208e8fc65b093 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "calc.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h2 class=\"content-head is-center\">Credit's calculator</h2>

<div class=\"pure-g\">
    <div class=\"l-box-lrg pure-u-1 pure-u-med-2-5\">
        <form class=\"pure-form pure-form-stacked\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/app/Main.php\" method=\"post\">
            <fieldset>

                <label for=\"amount_of_credit\">Amount of credit</label>
                <input id=\"amount_of_credit\" type=\"number\" placeholder=\"Amount of credit\" name=\"amount_of_credit\"
                       value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["amount_of_credit"]) ? $context["amount_of_credit"] : null), "html", null, true);
        echo "\" min=\"1\" max=\"10000000\">

                <label for=\"credit_years\">Years of credits</label>
                <input id=\"credit_years\" type=\"number\" placeholder=\"Credit's year\" name=\"credit_years\"
                       value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["credit_years"]) ? $context["credit_years"] : null), "html", null, true);
        echo "\" min=\"1\" max=\"40\">

                <label for=\"interest_value\">Interest's value</label>
                <input id=\"interest_value\" type=\"number\" placeholder=\"Interest value\" name=\"interest_value\" min=\"0\"
                       value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["interest_value"]) ? $context["interest_value"] : null), "html", null, true);
        echo "\" max=\"200\">

                <button type=\"submit\" class=\"pure-button\">Calculate</button>
            </fieldset>
        </form>
    </div>

    <div class=\"l-box-lrg pure-u-1 pure-u-med-3-5\">";
        // line 32
        if (array_key_exists("messages", $context)) {
            // line 33
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 0)) {
                // line 34
                ob_start();
                // line 35
                echo "        <h4>An errors occurred: </h4>
        <ol class=\"err\">";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 38
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 46
        if (array_key_exists("infos", $context)) {
            // line 47
            if ((twig_length_filter($this->env, (isset($context["infos"]) ? $context["infos"] : null)) > 0)) {
                // line 48
                ob_start();
                // line 49
                echo "        <ol class=\"inf\">";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 51
                    echo "            <li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "        </ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 58
        if (array_key_exists("result", $context)) {
            // line 59
            echo "        <h4>Result</h4>
        <p class=\"res\">";
            // line 61
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo " per month
        </p>";
        }
        // line 64
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "calc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 64,  126 => 61,  123 => 59,  121 => 58,  116 => 53,  108 => 51,  104 => 50,  102 => 49,  100 => 48,  98 => 47,  96 => 46,  91 => 40,  83 => 38,  79 => 37,  76 => 35,  74 => 34,  72 => 33,  70 => 32,  60 => 22,  53 => 18,  46 => 14,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "main.html" %}*/
/* */
/* {% block content %}*/
/* */
/* <h2 class="content-head is-center">Credit's calculator</h2>*/
/* */
/* <div class="pure-g">*/
/*     <div class="l-box-lrg pure-u-1 pure-u-med-2-5">*/
/*         <form class="pure-form pure-form-stacked" action="{{app_url}}/app/Main.php" method="post">*/
/*             <fieldset>*/
/* */
/*                 <label for="amount_of_credit">Amount of credit</label>*/
/*                 <input id="amount_of_credit" type="number" placeholder="Amount of credit" name="amount_of_credit"*/
/*                        value="{{amount_of_credit}}" min="1" max="10000000">*/
/* */
/*                 <label for="credit_years">Years of credits</label>*/
/*                 <input id="credit_years" type="number" placeholder="Credit's year" name="credit_years"*/
/*                        value="{{credit_years}}" min="1" max="40">*/
/* */
/*                 <label for="interest_value">Interest's value</label>*/
/*                 <input id="interest_value" type="number" placeholder="Interest value" name="interest_value" min="0"*/
/*                        value="{{interest_value}}" max="200">*/
/* */
/*                 <button type="submit" class="pure-button">Calculate</button>*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="l-box-lrg pure-u-1 pure-u-med-3-5">*/
/* */
/*         {# wyświeltenie listy błędów, jeśli istnieją #}*/
/*         {% if messages is defined %}*/
/*         {% if messages|length > 0 %}*/
/*         {% spaceless %}*/
/*         <h4>An errors occurred: </h4>*/
/*         <ol class="err">*/
/*             {% for msg in messages %}*/
/*             <li>{{ msg }}</li>*/
/*             {% endfor %}*/
/*         </ol>*/
/*         {% endspaceless %}*/
/*         {% endif %}*/
/*         {% endif %}*/
/* */
/*         {# wyświeltenie listy informacji, jeśli istnieją #}*/
/*         {% if infos is defined %}*/
/*         {% if infos|length > 0 %}*/
/*         {% spaceless %}*/
/*         <ol class="inf">*/
/*             {% for msg in infos %}*/
/*             <li>{{ msg }}</li>*/
/*             {% endfor %}*/
/*         </ol>*/
/*         {% endspaceless %}*/
/*         {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if result is defined %}*/
/*         <h4>Result</h4>*/
/*         <p class="res">*/
/*             {{result}} per month*/
/*         </p>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
