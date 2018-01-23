<?php

/* homepage.html.twig */
class __TwigTemplate_af77fd7decf5cd500d7c6044d008d668b62025b624f78dc8015713713dc32d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "homepage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"main-banner\" id=\"top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <img class=\"img-fluid\" src=\"";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/nina-banner-photo.png");
        echo "\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
              <h1 class=\"banner-heading\">Inspiring women to embrace fitness and nutritious food during and after pregnancy.</h1>
              <h2>Nina Biodrowicz</h2>
              <p>Pre &amp; Post Natal Specialist</p>
            </div>
          </div>

        </div>
      </div>

      <section id=\"about\">
        <div class=\"container\">
          <div class=\"row margin__top--large\">
            <div class=\"col-md-10 offset-md-1 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"";
        // line 24
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/nina-icon.svg");
        echo "\" alt=\"\">
              <h2>About Nina's Wellness</h2>
              <p class=\"body-text--intro\">
                I'm Nina, mum of Carmen and founder of Nina's Wellness Pre &amp; Post Natal Care. After many years of working in the fitness industry as a Personal Trainer and Fitness Instructor, I have chosen to focus on pregnancy, post partum period and transition to motherhood from the fitness and wellbeing perspective.
              </p>
              <p class=\"body-text--medium\">
                In 2017 I gained specialist qualifications that allow me to work with expecting and new mums and I continuously deepen and update my knowledge so I can bring the best practice to my Pre &amp; Post Natal Classes.
              </p>
              <p class=\"body-text--medium\">
                I help women not only physically to go throug the pregnancy but also mentally, as my focus is on mindful motherhood where women take a pleasure in looking after herself on a daily basis. What she does in terms of welling, will be quickly copied by her kids and I believe this is the best way of raising a healthy and active family.
              </p>
              <p class=\"body-text--medium\">
                I live in Essex and I have built a strong community of women who want to take care of their health, wellbeing and who believe the healthy lifestyle can be a way of living. I strive to grow my community and reach out to as many women as possible and always welcome any expecting or new mum who wishes to feel confident, energised and strong in her mind and body.
              </p>
              <p class=\"body-text--medium\">
                What I promote and teach under Nina's Wellness is what I do as Nina. I believe in movement, nutritious food and self care on a daily basis. My specialist fitness Pre &amp; Post Natal Classes help women to reconnect with their bodies and minds, get stronger, more energised and happier!
              </p>
            </div>
          </div>


          <div class=\"panel panel-default margin__top--large margin__bottom--large\">
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <h3>My Qualifications and Certifications:</h3>
                  <ul>
                    <li>Modern Pregnancy Exercise Prescription CPD</li>
                    <li>Active IQ Level 3 Diploma in Fitness Instructions and Personal Training (QCF)</li>
                    <li>Active IQ Award in Instructing Circuit Sessions</li>
                    <li>Studio Cycle Instructor Training</li>
                    <li>Acitive IQ Level 2 First Aid (QCF)</li>
                  </ul>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 text-center\">
                      <img class=\"img-fluid margin__top--medium\" src=\"";
        // line 61
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/rep-logo.png");
        echo "\" alt=\"\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 text-center\">
                      <img class=\"img-fluid margin__top--medium\" src=\"";
        // line 64
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/burrell-logo.png");
        echo "\" alt=\"\">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Lola Navarro</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                Thank you Nina for injecting me with the desire of getting fit after having my second child. The sessions were great and your energy and support to get the group through was the key to make me go Saturday mornings when all I wanted was to sleep. Nina's session will be the best reminder of how important your wellbeing is, allowing you to reconnect with yourself again. Don't think twice, just go for it!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"classes\">
        <div class=\"container fluid-container-mobile\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"200\" src=\"/images/flower-icon.svg\" alt=\"\">
              <h2>My Classes</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptatem nisi vel distinctio explicabo quasi sequi harum unde.
              </p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">4 Classes</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"";
        // line 106
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/classes/mindful-mama.png");
        echo "\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">Mindful Mama Pre Natal Workout</h4>
                  <p>4 classes prepaid block (to be used within 6 weeks)</p>
                  <p class=\"price\">&pound;40</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productOne\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productOne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Mindful Mama Pre Natal Workout</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>


            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">1 Session</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"";
        // line 140
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/classes/personal-training.png");
        echo "\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">1-To-1 Personal Training</h4>
                  <p>1 sessions prepaid (to be used within 5 weeks)</p>
                  <p class=\"price\">&pound;45</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productTwo\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productTwo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">1-To-1 Personal Training</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>



            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">4 Sessions</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"";
        // line 175
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/classes/personal-training.png");
        echo "\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">1-To-1 Personal Training</h4>
                  <p>4 sessions prepaid (to be used within 6 weeks)</p>
                  <p class=\"price\">&pound;160</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productThree\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productThree\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">1-To-1 Personal Training</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row margin__top--xlarge\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <a href=\"#\" class=\"btn btn-primary\">Book a class</a>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Eva Calle Rubi</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                Nina is a very inspiring and motivating trainer. She always created individualised routines which fit perfectly to my needs was always opened to suggestions. Well resourced and brilliant music! I would highly recommend her.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class=\"instagram\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"";
        // line 232
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/instagram-icon.svg");
        echo "\" alt=\"\">
              <h2>Instagram Feed</h2>
              <p class=\"body-text--intro\">
                Follow my feed for inspiration and useful advice on nutrition, exercise &amp; poses and updates on my classes!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Nathan Adams</h3>
              <p>
                I can highly recommend Nina's fitness sessions. Nina did some brilliant PT sessions for me - great fun, hard work and really helped me improve my all round fitness. I could see the results and nearly 2 years later I am still keeping up what I learnt with Nina!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"blog\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"";
        // line 259
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog-icon.svg");
        echo "\" alt=\"\">
              <h2>My Blog</h2>
              <p>
                Follow my feed for inspiration and useful advise on nutrition, exercise &amp; poses and updates on my classes!
              </p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('";
        // line 269
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog/blog-image-1.jpg");
        echo "');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('";
        // line 283
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog/blog-image-2.jpg");
        echo "'); background-position: right;\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('";
        // line 298
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog/blog-image-3.jpg");
        echo "');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('";
        // line 312
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/blog/blog-image-4.jpg");
        echo "');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <a href=\"#\" class=\"btn btn-primary\">See more posts</a>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Paula Couso Tome</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                I couldn't recommend Nina's fitness sessions enough. I joined her Bootcamp sessions to get back in shape after having my second child. She made us work hard but I could see the results straight away. It's a shame I can't go anymore.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"contact\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" src=\"";
        // line 354
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/contact-icon.svg");
        echo "\" width=\"100\" alt=\"\">
              <h2>Contact Me</h2>
              <p class=\"body-text--intro\">
                I love connecting with Mums To Be or New Mums so sign up here for my specialist modern pre and post natal e-newsletters full of fitness tips and nutritious food ideas to help you during your pregnancy and beyond.
              </p>
            </div>
          </div>

          <form action=\"\">
            <div class=\"row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"First name\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Last name\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email address\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"number\" class=\"form-control\" placeholder=\"Phone number\" required>
                </div>
              </div>
            </div>
            <div class=\"margin__top--small form-group\">
              <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Enter message here...\"></textarea>
            </div>
            <div class=\"row margin__top--large\">
              <div class=\"col-md-12 text-center\">
                <button class=\"btn btn-primary\">Submit form</button>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12 text-center\">
                <ul class=\"list-inline\">
                  <li class=\"list-inline-item\">
                    <a class=\"body-text--intro\" href=\"mailto:nina.biodrowicz@hotmail.com\">nina.biodrowicz@hotmail.com</a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a class=\"body-text--intro\" href=\"tel:07929300438\">07929 300 438</a>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </section>
";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 354,  377 => 312,  360 => 298,  342 => 283,  325 => 269,  312 => 259,  282 => 232,  222 => 175,  184 => 140,  147 => 106,  102 => 64,  96 => 61,  56 => 24,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<div class=\"main-banner\" id=\"top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-4\">
              <img class=\"img-fluid\" src=\"{{ url('theme://images/nina-banner-photo.png') }}\" alt=\"\">
            </div>
            <div class=\"col-md-8\">
              <h1 class=\"banner-heading\">Inspiring women to embrace fitness and nutritious food during and after pregnancy.</h1>
              <h2>Nina Biodrowicz</h2>
              <p>Pre &amp; Post Natal Specialist</p>
            </div>
          </div>

        </div>
      </div>

      <section id=\"about\">
        <div class=\"container\">
          <div class=\"row margin__top--large\">
            <div class=\"col-md-10 offset-md-1 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"{{ url('theme://images/nina-icon.svg') }}\" alt=\"\">
              <h2>About Nina's Wellness</h2>
              <p class=\"body-text--intro\">
                I'm Nina, mum of Carmen and founder of Nina's Wellness Pre &amp; Post Natal Care. After many years of working in the fitness industry as a Personal Trainer and Fitness Instructor, I have chosen to focus on pregnancy, post partum period and transition to motherhood from the fitness and wellbeing perspective.
              </p>
              <p class=\"body-text--medium\">
                In 2017 I gained specialist qualifications that allow me to work with expecting and new mums and I continuously deepen and update my knowledge so I can bring the best practice to my Pre &amp; Post Natal Classes.
              </p>
              <p class=\"body-text--medium\">
                I help women not only physically to go throug the pregnancy but also mentally, as my focus is on mindful motherhood where women take a pleasure in looking after herself on a daily basis. What she does in terms of welling, will be quickly copied by her kids and I believe this is the best way of raising a healthy and active family.
              </p>
              <p class=\"body-text--medium\">
                I live in Essex and I have built a strong community of women who want to take care of their health, wellbeing and who believe the healthy lifestyle can be a way of living. I strive to grow my community and reach out to as many women as possible and always welcome any expecting or new mum who wishes to feel confident, energised and strong in her mind and body.
              </p>
              <p class=\"body-text--medium\">
                What I promote and teach under Nina's Wellness is what I do as Nina. I believe in movement, nutritious food and self care on a daily basis. My specialist fitness Pre &amp; Post Natal Classes help women to reconnect with their bodies and minds, get stronger, more energised and happier!
              </p>
            </div>
          </div>


          <div class=\"panel panel-default margin__top--large margin__bottom--large\">
            <div class=\"panel-body\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <h3>My Qualifications and Certifications:</h3>
                  <ul>
                    <li>Modern Pregnancy Exercise Prescription CPD</li>
                    <li>Active IQ Level 3 Diploma in Fitness Instructions and Personal Training (QCF)</li>
                    <li>Active IQ Award in Instructing Circuit Sessions</li>
                    <li>Studio Cycle Instructor Training</li>
                    <li>Acitive IQ Level 2 First Aid (QCF)</li>
                  </ul>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 text-center\">
                      <img class=\"img-fluid margin__top--medium\" src=\"{{ url('theme://images/rep-logo.png') }}\" alt=\"\">
                    </div>
                    <div class=\"col-md-6 col-sm-6 text-center\">
                      <img class=\"img-fluid margin__top--medium\" src=\"{{ url('theme://images/burrell-logo.png') }}\" alt=\"\">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Lola Navarro</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                Thank you Nina for injecting me with the desire of getting fit after having my second child. The sessions were great and your energy and support to get the group through was the key to make me go Saturday mornings when all I wanted was to sleep. Nina's session will be the best reminder of how important your wellbeing is, allowing you to reconnect with yourself again. Don't think twice, just go for it!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"classes\">
        <div class=\"container fluid-container-mobile\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"200\" src=\"/images/flower-icon.svg\" alt=\"\">
              <h2>My Classes</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptatem nisi vel distinctio explicabo quasi sequi harum unde.
              </p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">4 Classes</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"{{ url('theme://images/classes/mindful-mama.png') }}\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">Mindful Mama Pre Natal Workout</h4>
                  <p>4 classes prepaid block (to be used within 6 weeks)</p>
                  <p class=\"price\">&pound;40</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productOne\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productOne\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Mindful Mama Pre Natal Workout</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>


            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">1 Session</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"{{ url('theme://images/classes/personal-training.png') }}\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">1-To-1 Personal Training</h4>
                  <p>1 sessions prepaid (to be used within 5 weeks)</p>
                  <p class=\"price\">&pound;45</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productTwo\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productTwo\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">1-To-1 Personal Training</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>



            <div class=\"col-md-4 text-center\">
              <div class=\"product-box\">
                <span class=\"class-type\">4 Sessions</span>
                <a class=\"product-box__heading\" href=\"#\">
                  <img src=\"{{ url('theme://images/classes/personal-training.png') }}\" alt=\"\">
                </a>
                <div class=\"product-box__content\">
                  <h4 class=\"match-height\">1-To-1 Personal Training</h4>
                  <p>4 sessions prepaid (to be used within 6 weeks)</p>
                  <p class=\"price\">&pound;160</p>
                  <a class=\"btn btn-default\" href=\"#\" data-toggle=\"modal\" data-target=\"#productThree\">More info</a>
                </div>
              </div>
            </div>
            <div class=\"modal fade\" id=\"productThree\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
              <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                  <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">1-To-1 Personal Training</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                      <span aria-hidden=\"true\">&times;</span>
                    </button>
                  </div>
                  <div class=\"modal-body\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae nesciunt veniam magni labore totam excepturi? Corporis sequi, quisquam nihil ea, recusandae, labore nesciunt voluptates dicta maxime cumque quaerat ducimus. Perspiciatis.
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\">Book this class</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"row margin__top--xlarge\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <a href=\"#\" class=\"btn btn-primary\">Book a class</a>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Eva Calle Rubi</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                Nina is a very inspiring and motivating trainer. She always created individualised routines which fit perfectly to my needs was always opened to suggestions. Well resourced and brilliant music! I would highly recommend her.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class=\"instagram\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"{{ url('theme://images/instagram-icon.svg') }}\" alt=\"\">
              <h2>Instagram Feed</h2>
              <p class=\"body-text--intro\">
                Follow my feed for inspiration and useful advice on nutrition, exercise &amp; poses and updates on my classes!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Nathan Adams</h3>
              <p>
                I can highly recommend Nina's fitness sessions. Nina did some brilliant PT sessions for me - great fun, hard work and really helped me improve my all round fitness. I could see the results and nearly 2 years later I am still keeping up what I learnt with Nina!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"blog\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" width=\"100\" src=\"{{ url('theme://images/blog-icon.svg') }}\" alt=\"\">
              <h2>My Blog</h2>
              <p>
                Follow my feed for inspiration and useful advise on nutrition, exercise &amp; poses and updates on my classes!
              </p>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('{{ url('theme://images/blog/blog-image-1.jpg') }}');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('{{ url('theme://images/blog/blog-image-2.jpg') }}'); background-position: right;\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>

            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('{{ url('theme://images/blog/blog-image-3.jpg') }}');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"blog-home\">
                <div class=\"blog-home__image match-height\" style=\"background-image: url('{{ url('theme://images/blog/blog-image-4.jpg') }}');\">
                </div>
                <div class=\"blog-home__content match-height\">
                  <p class=\"blog-home__date\">09 December 2017</p>
                  <div class=\"blog-home__content-inner\">
                    <h4>Blog Post Title #1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus facilis, at adipisci, amet beatae, aliquid reprehenderit.</p>
                    <a href=\"#\" class=\"btn btn-default\">Read more</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <a href=\"#\" class=\"btn btn-primary\">See more posts</a>
            </div>
          </div>
        </div>
      </section>

      <section class=\"testimonial\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 offset-md-2 text-center\">
              <h3>Paula Couso Tome</h3>
              <p class=\"body-text--intro\">
                Mum of 2
              </p>
              <p>
                I couldn't recommend Nina's fitness sessions enough. I joined her Bootcamp sessions to get back in shape after having my second child. She made us work hard but I could see the results straight away. It's a shame I can't go anymore.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section id=\"contact\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"section-intro col-md-8 offset-md-2 text-center\">
              <img class=\"margin__bottom--medium\" src=\"{{ url('theme://images/contact-icon.svg') }}\" width=\"100\" alt=\"\">
              <h2>Contact Me</h2>
              <p class=\"body-text--intro\">
                I love connecting with Mums To Be or New Mums so sign up here for my specialist modern pre and post natal e-newsletters full of fitness tips and nutritious food ideas to help you during your pregnancy and beyond.
              </p>
            </div>
          </div>

          <form action=\"\">
            <div class=\"row\">
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"First name\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Last name\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Email address\" required>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"form-group\">
                  <input type=\"number\" class=\"form-control\" placeholder=\"Phone number\" required>
                </div>
              </div>
            </div>
            <div class=\"margin__top--small form-group\">
              <textarea name=\"\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Enter message here...\"></textarea>
            </div>
            <div class=\"row margin__top--large\">
              <div class=\"col-md-12 text-center\">
                <button class=\"btn btn-primary\">Submit form</button>
              </div>
            </div>
            <div class=\"row\">
              <div class=\"col-md-12 text-center\">
                <ul class=\"list-inline\">
                  <li class=\"list-inline-item\">
                    <a class=\"body-text--intro\" href=\"mailto:nina.biodrowicz@hotmail.com\">nina.biodrowicz@hotmail.com</a>
                  </li>
                  <li class=\"list-inline-item\">
                    <a class=\"body-text--intro\" href=\"tel:07929300438\">07929 300 438</a>
                  </li>
                </ul>
              </div>
            </div>
          </form>
        </div>
      </section>
{% endblock %}
", "homepage.html.twig", "/Users/steveforbes/Sites/ninas-wellness/grav-admin/user/themes/nina/templates/homepage.html.twig");
    }
}
