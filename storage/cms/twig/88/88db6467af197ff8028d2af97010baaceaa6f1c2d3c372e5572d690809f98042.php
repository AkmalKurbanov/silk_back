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

/* C:\work\OpenServer\domains\silk-road.loc/themes/silk-road/partials/site/footer.htm */
class __TwigTemplate_486eda0ffa14a3133cdf6487a42827656d8fea8dff1c953dc79126677e5a652e extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer__wrap\">
      <div class=\"footer__col\">
        <div class=\"logo\">
          <a href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"163\" height=\"74\" viewBox=\"0 0 163 74\" fill=\"none\">
              <path
                d=\"M6.2573 56.4987C4.59561 56.291 3.19356 55.9535 3.19356 54.7591C3.19356 53.7465 4.12826 52.9157 6.04959 52.9157C7.55549 52.9157 8.85369 53.6686 9.32104 54.4476L11.3981 53.383C10.3596 51.254 8.1267 50.6309 5.9717 50.6309C3.42723 50.6568 0.623132 51.8252 0.623132 54.6553C0.623132 57.745 3.21952 58.4979 6.04959 58.8355C7.89302 59.0432 9.24315 59.5624 9.24315 60.8606C9.24315 62.3665 7.71127 62.9377 6.07555 62.9377C4.3879 62.9377 2.8041 62.2627 2.18097 60.7568L0 61.8732C1.01259 64.3917 3.19356 65.2745 6.02362 65.2745C9.08736 65.2745 11.8136 63.9504 11.8136 60.8866C11.8136 57.5892 9.13929 56.8622 6.2573 56.4987Z\"
                fill=\"white\"></path>
              <path d=\"M16.0719 55.1748H13.6572V64.9372H16.0719V55.1748Z\" fill=\"white\"></path>
              <path d=\"M20.6152 51.1504H18.2266V64.9372H20.6152V51.1504Z\" fill=\"white\"></path>
              <path
                d=\"M31.2081 55.3565V55.2267H28.3261L25.0547 59.1213V51.1504H22.666V64.9372H25.0547V60.5493L28.8714 64.9372H31.7793V64.7555L27.2616 59.7964L31.2081 55.3565Z\"
                fill=\"white\"></path>
              <path
                d=\"M45.4108 55.7196C45.4108 53.331 43.6972 51.176 40.4517 51.15C38.2707 51.15 36.0638 51.124 33.8828 51.124V64.9368H36.4792V60.3152H38.9717L42.9961 64.9368H46.0858V64.7551L41.9057 60.0556C44.528 59.5104 45.4108 57.589 45.4108 55.7196ZM36.4792 57.9785V53.5646H40.4517C42.0874 53.5646 42.8144 54.6811 42.8144 55.7716C42.8144 56.862 42.1134 57.9785 40.4517 57.9785H36.4792Z\"
                fill=\"white\"></path>
              <path
                d=\"M51.5643 55.0186C48.4746 55.0186 46.5273 57.3034 46.5273 60.0815C46.5273 62.8856 48.4227 65.1445 51.5643 65.1445C54.706 65.1445 56.6273 62.8856 56.6273 60.0815C56.6533 57.3034 54.654 55.0186 51.5643 55.0186ZM51.5643 62.9375C49.7988 62.9375 48.916 61.5615 48.916 60.0815C48.916 58.6275 49.8248 57.1995 51.5643 57.1995C53.1741 57.1995 54.2126 58.6275 54.2126 60.0815C54.2126 61.5615 53.3299 62.9375 51.5643 62.9375Z\"
                fill=\"white\"></path>
              <path
                d=\"M65.9222 56.5509C65.377 55.5902 64.1307 54.9671 62.8325 54.9671C60.0024 54.9411 57.7695 56.7067 57.7695 60.056C57.7695 63.4573 59.8986 65.2488 62.7806 65.2228C63.871 65.1969 65.377 64.6516 65.9482 63.5092L66.078 64.9372H68.3368V55.2267H66.026L65.9222 56.5509ZM63.0402 63.0159C61.4304 63.0159 60.1582 61.8994 60.1582 60.056C60.1582 58.2126 61.4304 57.1221 63.0402 57.1221C66.8309 57.1221 66.8309 63.0159 63.0402 63.0159Z\"
                fill=\"white\"></path>
              <path
                d=\"M78.0472 56.5249C77.476 55.5123 75.8662 54.9671 74.8536 54.9671C72.0236 54.9671 69.8945 56.7067 69.8945 60.056C69.8945 63.2496 72.0495 65.1449 74.9056 65.1449C76.0999 65.1449 77.2942 64.7555 78.0472 63.5871L78.203 64.9372H80.4618V51.1504H78.0472V56.5249ZM75.0613 62.938C73.5295 62.938 72.3092 61.7696 72.3092 60.082C72.3092 58.3164 73.5295 57.2519 75.0613 57.2519C76.5673 57.2519 77.8914 58.3943 77.8914 60.082C77.8654 61.8215 76.5673 62.938 75.0613 62.938Z\"
                fill=\"white\"></path>
              <path
                d=\"M88.6665 56.4987C87.0048 56.291 85.6027 55.9535 85.6027 54.7591C85.6027 53.7465 86.5375 52.9157 88.4588 52.9157C89.9647 52.9157 91.2629 53.6686 91.7302 54.4476L93.8073 53.383C92.7688 51.254 90.5359 50.6309 88.3809 50.6309C85.8364 50.6568 83.0323 51.8252 83.0323 54.6553C83.0323 57.745 85.6287 58.4979 88.4588 58.8355C90.3022 59.0432 91.6523 59.5624 91.6523 60.8606C91.6523 62.3665 90.1205 62.9377 88.4847 62.9377C86.7971 62.9377 85.2133 62.2627 84.5901 60.7568L82.4092 61.8732C83.4218 64.3917 85.6027 65.2745 88.4328 65.2745C91.4966 65.2745 94.2228 63.9504 94.2228 60.8866C94.2228 57.5892 91.5225 56.8622 88.6665 56.4987Z\"
                fill=\"white\"></path>
              <path
                d=\"M101.675 55.0705C100.559 55.0705 99.4941 55.4081 98.6373 56.5245V51.124H96.2227V64.9368H98.6373V59.9777C98.6373 58.5237 99.6239 57.3034 101.052 57.3034C102.324 57.3034 103.259 58.0564 103.259 59.8219V64.9368H105.674V59.8219C105.674 56.9399 104.453 55.0705 101.675 55.0705Z\"
                fill=\"white\"></path>
              <path d=\"M110.113 55.1748H107.698V64.9372H110.113V55.1748Z\" fill=\"white\"></path>
              <path
                d=\"M117.824 54.9932C116.707 54.9932 115.409 55.4605 114.682 56.551L114.526 55.2009H112.268V68.027H114.682V63.769C115.383 64.8335 116.889 65.145 117.928 65.145C121.043 65.145 122.835 62.8862 122.835 60.0561C122.809 57.2261 120.836 54.9932 117.824 54.9932ZM117.642 62.8343C116.006 62.8343 114.89 61.588 114.89 60.0821C114.89 58.5762 115.928 57.3299 117.642 57.3299C119.382 57.3299 120.394 58.5762 120.394 60.0821C120.42 61.6139 119.304 62.8343 117.642 62.8343Z\"
                fill=\"white\"></path>
              <path
                d=\"M130.157 54.9932C129.041 54.9932 127.743 55.4605 126.99 56.551L126.834 55.2009H124.575V68.027H126.99V63.769C127.691 64.8335 129.197 65.145 130.235 65.145C133.351 65.145 135.143 62.8862 135.143 60.0561C135.143 57.2261 133.143 54.9932 130.157 54.9932ZM129.976 62.8343C128.34 62.8343 127.224 61.588 127.224 60.0821C127.224 58.5762 128.262 57.3299 129.976 57.3299C131.715 57.3299 132.728 58.5762 132.728 60.0821C132.728 61.6139 131.611 62.8343 129.976 62.8343Z\"
                fill=\"white\"></path>
              <path d=\"M139.322 55.1748H136.907V64.9372H139.322V55.1748Z\" fill=\"white\"></path>
              <path
                d=\"M146.93 55.0703C145.71 55.0703 144.723 55.5636 143.737 56.5243L143.581 55.2001H141.426V64.9366H143.814V59.9775C143.814 58.4976 144.827 57.2513 146.307 57.2513C147.839 57.2513 148.644 58.3677 148.644 59.8477V64.9366H151.058V59.8217C151.058 56.7839 149.215 55.0703 146.93 55.0703Z\"
                fill=\"white\"></path>
              <path
                d=\"M162.456 59.8221C162.456 58.7575 162.17 57.7969 161.443 56.9401L162.534 55.564L160.768 54.2139L159.808 55.4342C159.133 54.9928 158.354 54.8889 157.575 54.8889C154.849 54.8889 152.642 56.7843 152.642 59.8221C152.642 62.8598 154.537 64.7033 157.575 64.7033C158.769 64.7033 160.041 65.3264 160.041 66.6506C160.041 67.9747 158.951 68.7277 157.575 68.7277C156.199 68.7277 155.03 67.8968 155.03 66.6506H152.642C152.642 69.2729 154.745 70.9865 157.575 70.9865C160.405 70.9865 162.456 69.3249 162.456 66.6506C162.456 65.4043 162.066 64.2359 160.457 63.4311C162.015 62.73 162.456 61.0424 162.456 59.8221ZM157.549 62.5223C156.147 62.5223 155.004 61.5097 155.004 59.8221C155.004 58.1344 156.147 57.0699 157.549 57.0699C158.925 57.0699 160.067 58.1344 160.067 59.8221C160.093 61.5097 158.951 62.5223 157.549 62.5223Z\"
                fill=\"white\"></path>
              <path
                d=\"M1.7396 70.2074C1.7396 69.9738 1.94731 69.8699 2.28485 69.8699C2.62238 69.8699 3.16762 70.0517 3.609 70.3113L3.9725 69.5064C3.55708 69.2208 2.93394 69.0391 2.33677 69.0391C1.35014 69.0391 0.675084 69.5324 0.675084 70.3113C0.675084 71.8172 2.9599 71.3498 2.9599 72.1547C2.9599 72.4144 2.72623 72.5702 2.33677 72.5702C1.89539 72.5702 1.27225 72.3105 0.830865 71.9211L0.441406 72.7C0.934721 73.1154 1.63575 73.375 2.33677 73.375C3.27147 73.375 4.02443 72.9336 4.02443 72.0768C3.99846 70.5709 1.7396 71.0123 1.7396 70.2074Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M11.943 72.3104L11.0343 69.0908H10.0996L9.19086 72.3104L8.30809 69.0908H7.26953L8.67158 73.3489H9.68417L10.5669 70.3111L11.4238 73.3489H12.4104L13.8384 69.0908H12.8518L11.943 72.3104Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M18.279 69.0908H17.3184V73.3749H18.279V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M22.2773 73.3489H23.238V71.7391H25.1853V70.9343H23.238V69.8697H25.3411L25.367 69.0908H22.2773V73.3489Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M28.5605 69.8957H29.8587V73.3489H30.8194V69.8957H32.1176V69.0908H28.5605V69.8957Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M35.9603 72.4404C35.7006 72.4404 35.4929 72.6481 35.4929 72.9078C35.4929 73.0636 35.5449 73.1934 35.6747 73.2972L35.415 73.9204H35.8824L36.2978 73.2972C36.3757 73.1934 36.4276 73.0636 36.4276 72.9078C36.4276 72.6222 36.194 72.4404 35.9603 72.4404Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M48.3185 70.5708C48.3185 69.6361 47.6954 69.0908 46.553 69.0908H44.6836V73.3749H45.6443V72.1546H46.527H46.6309L47.3059 73.3749H48.3964L47.4877 71.9728C48.0329 71.7132 48.3185 71.2199 48.3185 70.5708ZM46.579 71.3237H45.6962V69.8697H46.579C47.0982 69.8697 47.4098 70.1034 47.4098 70.5967C47.4098 71.09 47.0982 71.3237 46.579 71.3237Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M53.1482 71.6093H55.2253V70.8045H53.1482V69.8697H55.4589V69.0908H52.1875V73.3489H55.5109V72.57H53.1482V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M60.3138 69.0908H59.3271V73.3489H62.1312V72.5181H60.3138V69.0908Z\" fill=\"#FCB408\"></path>
              <path d=\"M66.7273 69.0908H65.7666V73.3749H66.7273V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M72.1018 69.0908L70.2324 73.3749H71.219L71.5566 72.544H73.5298L73.8674 73.3749H74.9059L73.0884 69.0908H72.1018ZM71.8941 71.7391L72.5692 70.0774L73.2442 71.7391H71.8941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M81.1893 71.09C81.6566 70.9862 81.9162 70.6227 81.9162 70.1553C81.9162 69.5063 81.3191 69.0908 80.3844 69.0908H78.4111V73.3749H80.4363C81.4229 73.3749 82.0461 72.9335 82.0461 72.1805C82.072 71.6093 81.7345 71.1939 81.1893 71.09ZM79.3978 69.8697H80.3584C80.7219 69.8697 80.9556 70.0255 80.9556 70.3371C80.9556 70.6486 80.7219 70.8044 80.3584 70.8044H79.3978V69.8697ZM80.3584 72.57H79.3978V71.5574H80.3584C80.8258 71.5574 81.0854 71.7391 81.0854 72.0507C81.0854 72.3882 80.7998 72.57 80.3584 72.57Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M86.7976 69.0908H85.8369V73.3489H88.641V72.5181H86.7976V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M93.236 71.6093H95.3132V70.8045H93.236V69.8697H95.5209V69.0908H92.2754V73.3489H95.5988V72.57H93.236V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M99.6751 72.4404C99.4155 72.4404 99.2078 72.6481 99.2078 72.9078C99.2078 73.0636 99.2597 73.1934 99.3895 73.2972L99.1299 73.9204H99.5972L100.013 73.2972C100.091 73.1934 100.142 73.0636 100.142 72.9078C100.117 72.6222 99.9088 72.4404 99.6751 72.4404Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M109.36 70.2074C109.36 69.9738 109.567 69.8699 109.905 69.8699C110.242 69.8699 110.788 70.0517 111.229 70.3113L111.593 69.5064C111.177 69.2208 110.554 69.0391 109.957 69.0391C108.97 69.0391 108.295 69.5324 108.295 70.3113C108.295 71.8172 110.58 71.3498 110.58 72.1547C110.58 72.4144 110.346 72.5702 109.957 72.5702C109.515 72.5702 108.892 72.3105 108.451 71.9211L108.062 72.7C108.555 73.1154 109.256 73.375 109.957 73.375C110.892 73.375 111.645 72.9336 111.645 72.0768C111.645 70.5709 109.36 71.0123 109.36 70.2074Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M116.344 71.6093H118.396V70.8045H116.344V69.8697H118.629V69.0908H115.384V73.3489H118.707V72.57H116.344V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M124.497 72.5182C123.77 72.5182 123.199 71.947 123.199 71.1941C123.199 70.4411 123.77 69.8699 124.497 69.8699C124.886 69.8699 125.328 70.0776 125.613 70.4152L126.184 69.7401C125.769 69.2987 125.12 69.0391 124.497 69.0391C123.199 69.0391 122.212 69.9738 122.212 71.1941C122.212 72.4403 123.173 73.375 124.445 73.375C125.068 73.375 125.717 73.0635 126.184 72.6221L125.613 71.999C125.302 72.3365 124.886 72.5182 124.497 72.5182Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M132.624 71.558C132.624 72.1811 132.234 72.5446 131.663 72.5446C131.092 72.5446 130.676 72.1811 130.676 71.558V69.0654H129.716V71.558C129.716 72.7004 130.469 73.4014 131.663 73.4014C132.831 73.4014 133.584 72.7004 133.584 71.558V69.0654H132.624V71.558Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M141.14 70.5708C141.14 69.6361 140.517 69.0908 139.374 69.0908H137.505V73.3749H138.466V72.1546H139.348H139.452L140.127 73.3749H141.218L140.309 71.9728C140.854 71.7132 141.14 71.2199 141.14 70.5708ZM139.374 71.3237H138.492V69.8697H139.374C139.894 69.8697 140.205 70.1034 140.205 70.5967C140.205 71.09 139.894 71.3237 139.374 71.3237Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M145.969 72.57V71.6093H148.021V70.8045H145.969V69.8697H148.254V69.0908H145.009V73.3489H148.332V72.57H145.969Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M13.4229 52.4743C13.4229 54.3437 16.2529 54.3437 16.2529 52.4743C16.2789 50.6049 13.4229 50.6049 13.4229 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M110.32 52.4743C110.32 50.6049 107.49 50.6049 107.49 52.4743C107.49 54.3437 110.32 54.3437 110.32 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M139.53 52.4743C139.53 50.6049 136.7 50.6049 136.7 52.4743C136.7 54.3437 139.53 54.3437 139.53 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M88.3809 40.1932C87.8097 40.7644 86.9789 40.9721 86.1999 40.7644L83.0843 39.9336L80.9033 42.1146L85.1614 43.257C87.0827 43.7762 89.1339 43.231 90.5359 41.8289L100.35 32.0146L99.5454 29.0547L88.3809 40.1932Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M74.4383 44.815L80.9293 38.2981L79.0339 36.4287L72.543 42.9197L74.4383 44.815Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M99.0523 6.82972L103.051 2.83129C103.57 2.31201 103.57 1.45519 103.051 0.935917C102.531 0.416639 101.675 0.416639 101.155 0.935917L97.157 4.93436L79.3717 0.182966C77.4763 -0.310348 75.4771 0.208934 74.075 1.55906L77.0609 2.36393L77.0869 2.33797L95.002 7.14129L94.1451 7.9981L81.8642 20.279L70.2324 17.1114C68.8044 16.722 67.3504 17.5788 66.9609 19.0068L81.2151 22.9014L85.1097 37.1556C86.5377 36.7661 87.3945 35.3121 87.0051 33.8841L83.8115 22.1484L96.0405 9.91943L96.8973 9.06262L99.26 17.9163L102.557 29.8597C103.83 28.4577 104.323 26.5104 103.83 24.6669L99.0523 6.82972Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M68.1816 25.5497L66.2602 23.6543L60.0029 29.9376L61.8983 31.8329L68.1816 25.5497Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M62.1317 24.0182L64.3127 21.8372L63.2222 17.7609C63.0145 16.982 63.2481 16.1512 63.7934 15.5799L74.88 4.49336L71.8941 3.68848L62.1836 13.399C60.7816 14.801 60.2363 16.8522 60.7556 18.7735L62.1317 24.0182Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M64.8321 37.3036L58.5166 43.6191L60.4076 45.5101L66.7231 39.1946L64.8321 37.3036Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M76.697 29.2362L74.8016 27.3408L68.1289 34.0135L70.0243 35.9089C70.0243 35.9089 75.3209 30.5863 76.697 29.2362Z\"
                fill=\"#FCB408\"></path>
            </svg>
          </a>
        </div>
        <div class=\"footer__menu\">
          <ul>
            <li><a href=\"#\">О компании</a></li>
            <li>
              ";
        // line 136
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 136), "url", [], "any", false, false, true, 136) == "/")) {
            // line 137
            echo "              <a class=\"order-js\" href=\"#etaps\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Как это работает"]);
            echo "</a>
              ";
        } else {
            // line 139
            echo "              <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "#etaps\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Как это работает"]);
            echo "</a>
              ";
        }
        // line 141
        echo "            </li>
            <li><a href=\"";
        // line 142
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["faq"]);
        echo "\">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">";
        // line 147
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Клиентам"]);
        echo "</h2>
        <div class=\"footer__menu\">
          <ul>
            <li>
              ";
        // line 151
        if (($context["user"] ?? null)) {
            // line 152
            echo "              <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("personal");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Личный кабинет"]);
            echo "</a>
              ";
        } else {
            // line 154
            echo "              <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("registration");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Регистрация"]);
            echo "</a>
              ";
        }
        // line 156
        echo "            </li>
            <li>
              <a class=\"cost-calc-js order-js\" href=\"#calculator\">";
        // line 158
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Расчёт онлайн"]);
        echo "</a>
            </li>
            ";
        // line 160
        if (($context["user"] ?? null)) {
            // line 161
            echo "            <li><a class=\"tracking-js\" href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("personal");
            echo "\">";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Отследить мой груз"]);
            echo "</a></li>
            ";
        }
        // line 163
        echo "          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">";
        // line 167
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Услуги"]);
        echo "</h2>
        <div class=\"footer__menu\">



          ";
        // line 172
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "records", [], "any", false, false, true, 172);
        // line 173
        echo "          ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "displayColumn", [], "any", false, false, true, 173);
        // line 174
        echo "          ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "noRecordsMessage", [], "any", false, false, true, 174);
        // line 175
        echo "          ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsPage", [], "any", false, false, true, 175);
        // line 176
        echo "          ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 176);
        // line 177
        echo "          ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["services"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 177);
        // line 178
        echo "          <ul>
            ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 180
            echo "            <li>
              <a
                href=\"";
            // line 182
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 182, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 182)]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 182), 182, $this->source), "html", null, true);
            echo "</a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">";
        // line 189
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Контакты"]);
        echo "</h2>
        <div class=\"info\">
          <div class=\"info__item\"><i class=\"icon-phone\"> </i><a href=\"tel:";
        // line 191
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 191), "phone", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 191), "phone", [], "any", false, false, true, 191), 191, $this->source), "html", null, true);
        echo "</a>
          </div>
          <div class=\"info__item\"><i class=\"icon-marker\"></i>
            <ul>
              <li>Address: ";
        // line 195
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 195), "address", [], "any", false, false, true, 195), 195, $this->source), "html", null, true);
        echo " </li>
              <li>City: ";
        // line 196
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 196), "city", [], "any", false, false, true, 196), 196, $this->source), "html", null, true);
        echo "</li>
              <li>State: ";
        // line 197
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 197), "state", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo " </li>
              <li>Zip Code: ";
        // line 198
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 198), "zip_code", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
        echo "</li>
            </ul>
          </div>
          <div class=\"info__item\"><i class=\"icon-envelope\"> </i><a
              href=\"mailto:";
        // line 202
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 202), "email", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 202), "email", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
        echo "</a></div>
        </div>
      </div>
    </div>
    <div class=\"footer__bottom\">
      <div class=\"footer__bottom-col\">
        <p>© ";
        // line 208
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, true, 208), 208, $this->source), "Y"), "html", null, true);
        echo " “Silk Road Shipping”. ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Все права защищены"]);
        echo "</p>
      </div>
      <div class=\"footer__bottom-col\">
        <div class=\"social\">
          <ul>
            ";
        // line 213
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 213), "social", [], "any", false, false, true, 213));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 214
            echo "            <li>
              <a href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                <i class=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, true, 216), 216, $this->source), "html", null, true);
            echo "\"></i>
              </a>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 220
        echo "            <li>
              <a href=\"mailto:";
        // line 221
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 221), "email", [], "any", false, false, true, 221), 221, $this->source), "html", null, true);
        echo "\" target=\"_blank\">
                <i class=\"icon-envelope\" style=\"font-size: 11px; margin-left: -3px;\"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"footer__bottom-col\">
        <p>";
        // line 229
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Положение о защите персональных данных"]);
        echo "</p>
      </div>
    </div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 229,  387 => 221,  384 => 220,  374 => 216,  370 => 215,  367 => 214,  363 => 213,  353 => 208,  342 => 202,  335 => 198,  331 => 197,  327 => 196,  323 => 195,  314 => 191,  309 => 189,  303 => 185,  292 => 182,  288 => 180,  284 => 179,  281 => 178,  278 => 177,  275 => 176,  272 => 175,  269 => 174,  266 => 173,  264 => 172,  256 => 167,  250 => 163,  242 => 161,  240 => 160,  235 => 158,  231 => 156,  223 => 154,  215 => 152,  213 => 151,  206 => 147,  198 => 142,  195 => 141,  187 => 139,  181 => 137,  179 => 136,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
  <div class=\"container\">
    <div class=\"footer__wrap\">
      <div class=\"footer__col\">
        <div class=\"logo\">
          <a href=\"{{ 'home'|page }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"163\" height=\"74\" viewBox=\"0 0 163 74\" fill=\"none\">
              <path
                d=\"M6.2573 56.4987C4.59561 56.291 3.19356 55.9535 3.19356 54.7591C3.19356 53.7465 4.12826 52.9157 6.04959 52.9157C7.55549 52.9157 8.85369 53.6686 9.32104 54.4476L11.3981 53.383C10.3596 51.254 8.1267 50.6309 5.9717 50.6309C3.42723 50.6568 0.623132 51.8252 0.623132 54.6553C0.623132 57.745 3.21952 58.4979 6.04959 58.8355C7.89302 59.0432 9.24315 59.5624 9.24315 60.8606C9.24315 62.3665 7.71127 62.9377 6.07555 62.9377C4.3879 62.9377 2.8041 62.2627 2.18097 60.7568L0 61.8732C1.01259 64.3917 3.19356 65.2745 6.02362 65.2745C9.08736 65.2745 11.8136 63.9504 11.8136 60.8866C11.8136 57.5892 9.13929 56.8622 6.2573 56.4987Z\"
                fill=\"white\"></path>
              <path d=\"M16.0719 55.1748H13.6572V64.9372H16.0719V55.1748Z\" fill=\"white\"></path>
              <path d=\"M20.6152 51.1504H18.2266V64.9372H20.6152V51.1504Z\" fill=\"white\"></path>
              <path
                d=\"M31.2081 55.3565V55.2267H28.3261L25.0547 59.1213V51.1504H22.666V64.9372H25.0547V60.5493L28.8714 64.9372H31.7793V64.7555L27.2616 59.7964L31.2081 55.3565Z\"
                fill=\"white\"></path>
              <path
                d=\"M45.4108 55.7196C45.4108 53.331 43.6972 51.176 40.4517 51.15C38.2707 51.15 36.0638 51.124 33.8828 51.124V64.9368H36.4792V60.3152H38.9717L42.9961 64.9368H46.0858V64.7551L41.9057 60.0556C44.528 59.5104 45.4108 57.589 45.4108 55.7196ZM36.4792 57.9785V53.5646H40.4517C42.0874 53.5646 42.8144 54.6811 42.8144 55.7716C42.8144 56.862 42.1134 57.9785 40.4517 57.9785H36.4792Z\"
                fill=\"white\"></path>
              <path
                d=\"M51.5643 55.0186C48.4746 55.0186 46.5273 57.3034 46.5273 60.0815C46.5273 62.8856 48.4227 65.1445 51.5643 65.1445C54.706 65.1445 56.6273 62.8856 56.6273 60.0815C56.6533 57.3034 54.654 55.0186 51.5643 55.0186ZM51.5643 62.9375C49.7988 62.9375 48.916 61.5615 48.916 60.0815C48.916 58.6275 49.8248 57.1995 51.5643 57.1995C53.1741 57.1995 54.2126 58.6275 54.2126 60.0815C54.2126 61.5615 53.3299 62.9375 51.5643 62.9375Z\"
                fill=\"white\"></path>
              <path
                d=\"M65.9222 56.5509C65.377 55.5902 64.1307 54.9671 62.8325 54.9671C60.0024 54.9411 57.7695 56.7067 57.7695 60.056C57.7695 63.4573 59.8986 65.2488 62.7806 65.2228C63.871 65.1969 65.377 64.6516 65.9482 63.5092L66.078 64.9372H68.3368V55.2267H66.026L65.9222 56.5509ZM63.0402 63.0159C61.4304 63.0159 60.1582 61.8994 60.1582 60.056C60.1582 58.2126 61.4304 57.1221 63.0402 57.1221C66.8309 57.1221 66.8309 63.0159 63.0402 63.0159Z\"
                fill=\"white\"></path>
              <path
                d=\"M78.0472 56.5249C77.476 55.5123 75.8662 54.9671 74.8536 54.9671C72.0236 54.9671 69.8945 56.7067 69.8945 60.056C69.8945 63.2496 72.0495 65.1449 74.9056 65.1449C76.0999 65.1449 77.2942 64.7555 78.0472 63.5871L78.203 64.9372H80.4618V51.1504H78.0472V56.5249ZM75.0613 62.938C73.5295 62.938 72.3092 61.7696 72.3092 60.082C72.3092 58.3164 73.5295 57.2519 75.0613 57.2519C76.5673 57.2519 77.8914 58.3943 77.8914 60.082C77.8654 61.8215 76.5673 62.938 75.0613 62.938Z\"
                fill=\"white\"></path>
              <path
                d=\"M88.6665 56.4987C87.0048 56.291 85.6027 55.9535 85.6027 54.7591C85.6027 53.7465 86.5375 52.9157 88.4588 52.9157C89.9647 52.9157 91.2629 53.6686 91.7302 54.4476L93.8073 53.383C92.7688 51.254 90.5359 50.6309 88.3809 50.6309C85.8364 50.6568 83.0323 51.8252 83.0323 54.6553C83.0323 57.745 85.6287 58.4979 88.4588 58.8355C90.3022 59.0432 91.6523 59.5624 91.6523 60.8606C91.6523 62.3665 90.1205 62.9377 88.4847 62.9377C86.7971 62.9377 85.2133 62.2627 84.5901 60.7568L82.4092 61.8732C83.4218 64.3917 85.6027 65.2745 88.4328 65.2745C91.4966 65.2745 94.2228 63.9504 94.2228 60.8866C94.2228 57.5892 91.5225 56.8622 88.6665 56.4987Z\"
                fill=\"white\"></path>
              <path
                d=\"M101.675 55.0705C100.559 55.0705 99.4941 55.4081 98.6373 56.5245V51.124H96.2227V64.9368H98.6373V59.9777C98.6373 58.5237 99.6239 57.3034 101.052 57.3034C102.324 57.3034 103.259 58.0564 103.259 59.8219V64.9368H105.674V59.8219C105.674 56.9399 104.453 55.0705 101.675 55.0705Z\"
                fill=\"white\"></path>
              <path d=\"M110.113 55.1748H107.698V64.9372H110.113V55.1748Z\" fill=\"white\"></path>
              <path
                d=\"M117.824 54.9932C116.707 54.9932 115.409 55.4605 114.682 56.551L114.526 55.2009H112.268V68.027H114.682V63.769C115.383 64.8335 116.889 65.145 117.928 65.145C121.043 65.145 122.835 62.8862 122.835 60.0561C122.809 57.2261 120.836 54.9932 117.824 54.9932ZM117.642 62.8343C116.006 62.8343 114.89 61.588 114.89 60.0821C114.89 58.5762 115.928 57.3299 117.642 57.3299C119.382 57.3299 120.394 58.5762 120.394 60.0821C120.42 61.6139 119.304 62.8343 117.642 62.8343Z\"
                fill=\"white\"></path>
              <path
                d=\"M130.157 54.9932C129.041 54.9932 127.743 55.4605 126.99 56.551L126.834 55.2009H124.575V68.027H126.99V63.769C127.691 64.8335 129.197 65.145 130.235 65.145C133.351 65.145 135.143 62.8862 135.143 60.0561C135.143 57.2261 133.143 54.9932 130.157 54.9932ZM129.976 62.8343C128.34 62.8343 127.224 61.588 127.224 60.0821C127.224 58.5762 128.262 57.3299 129.976 57.3299C131.715 57.3299 132.728 58.5762 132.728 60.0821C132.728 61.6139 131.611 62.8343 129.976 62.8343Z\"
                fill=\"white\"></path>
              <path d=\"M139.322 55.1748H136.907V64.9372H139.322V55.1748Z\" fill=\"white\"></path>
              <path
                d=\"M146.93 55.0703C145.71 55.0703 144.723 55.5636 143.737 56.5243L143.581 55.2001H141.426V64.9366H143.814V59.9775C143.814 58.4976 144.827 57.2513 146.307 57.2513C147.839 57.2513 148.644 58.3677 148.644 59.8477V64.9366H151.058V59.8217C151.058 56.7839 149.215 55.0703 146.93 55.0703Z\"
                fill=\"white\"></path>
              <path
                d=\"M162.456 59.8221C162.456 58.7575 162.17 57.7969 161.443 56.9401L162.534 55.564L160.768 54.2139L159.808 55.4342C159.133 54.9928 158.354 54.8889 157.575 54.8889C154.849 54.8889 152.642 56.7843 152.642 59.8221C152.642 62.8598 154.537 64.7033 157.575 64.7033C158.769 64.7033 160.041 65.3264 160.041 66.6506C160.041 67.9747 158.951 68.7277 157.575 68.7277C156.199 68.7277 155.03 67.8968 155.03 66.6506H152.642C152.642 69.2729 154.745 70.9865 157.575 70.9865C160.405 70.9865 162.456 69.3249 162.456 66.6506C162.456 65.4043 162.066 64.2359 160.457 63.4311C162.015 62.73 162.456 61.0424 162.456 59.8221ZM157.549 62.5223C156.147 62.5223 155.004 61.5097 155.004 59.8221C155.004 58.1344 156.147 57.0699 157.549 57.0699C158.925 57.0699 160.067 58.1344 160.067 59.8221C160.093 61.5097 158.951 62.5223 157.549 62.5223Z\"
                fill=\"white\"></path>
              <path
                d=\"M1.7396 70.2074C1.7396 69.9738 1.94731 69.8699 2.28485 69.8699C2.62238 69.8699 3.16762 70.0517 3.609 70.3113L3.9725 69.5064C3.55708 69.2208 2.93394 69.0391 2.33677 69.0391C1.35014 69.0391 0.675084 69.5324 0.675084 70.3113C0.675084 71.8172 2.9599 71.3498 2.9599 72.1547C2.9599 72.4144 2.72623 72.5702 2.33677 72.5702C1.89539 72.5702 1.27225 72.3105 0.830865 71.9211L0.441406 72.7C0.934721 73.1154 1.63575 73.375 2.33677 73.375C3.27147 73.375 4.02443 72.9336 4.02443 72.0768C3.99846 70.5709 1.7396 71.0123 1.7396 70.2074Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M11.943 72.3104L11.0343 69.0908H10.0996L9.19086 72.3104L8.30809 69.0908H7.26953L8.67158 73.3489H9.68417L10.5669 70.3111L11.4238 73.3489H12.4104L13.8384 69.0908H12.8518L11.943 72.3104Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M18.279 69.0908H17.3184V73.3749H18.279V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M22.2773 73.3489H23.238V71.7391H25.1853V70.9343H23.238V69.8697H25.3411L25.367 69.0908H22.2773V73.3489Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M28.5605 69.8957H29.8587V73.3489H30.8194V69.8957H32.1176V69.0908H28.5605V69.8957Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M35.9603 72.4404C35.7006 72.4404 35.4929 72.6481 35.4929 72.9078C35.4929 73.0636 35.5449 73.1934 35.6747 73.2972L35.415 73.9204H35.8824L36.2978 73.2972C36.3757 73.1934 36.4276 73.0636 36.4276 72.9078C36.4276 72.6222 36.194 72.4404 35.9603 72.4404Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M48.3185 70.5708C48.3185 69.6361 47.6954 69.0908 46.553 69.0908H44.6836V73.3749H45.6443V72.1546H46.527H46.6309L47.3059 73.3749H48.3964L47.4877 71.9728C48.0329 71.7132 48.3185 71.2199 48.3185 70.5708ZM46.579 71.3237H45.6962V69.8697H46.579C47.0982 69.8697 47.4098 70.1034 47.4098 70.5967C47.4098 71.09 47.0982 71.3237 46.579 71.3237Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M53.1482 71.6093H55.2253V70.8045H53.1482V69.8697H55.4589V69.0908H52.1875V73.3489H55.5109V72.57H53.1482V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M60.3138 69.0908H59.3271V73.3489H62.1312V72.5181H60.3138V69.0908Z\" fill=\"#FCB408\"></path>
              <path d=\"M66.7273 69.0908H65.7666V73.3749H66.7273V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M72.1018 69.0908L70.2324 73.3749H71.219L71.5566 72.544H73.5298L73.8674 73.3749H74.9059L73.0884 69.0908H72.1018ZM71.8941 71.7391L72.5692 70.0774L73.2442 71.7391H71.8941Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M81.1893 71.09C81.6566 70.9862 81.9162 70.6227 81.9162 70.1553C81.9162 69.5063 81.3191 69.0908 80.3844 69.0908H78.4111V73.3749H80.4363C81.4229 73.3749 82.0461 72.9335 82.0461 72.1805C82.072 71.6093 81.7345 71.1939 81.1893 71.09ZM79.3978 69.8697H80.3584C80.7219 69.8697 80.9556 70.0255 80.9556 70.3371C80.9556 70.6486 80.7219 70.8044 80.3584 70.8044H79.3978V69.8697ZM80.3584 72.57H79.3978V71.5574H80.3584C80.8258 71.5574 81.0854 71.7391 81.0854 72.0507C81.0854 72.3882 80.7998 72.57 80.3584 72.57Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M86.7976 69.0908H85.8369V73.3489H88.641V72.5181H86.7976V69.0908Z\" fill=\"#FCB408\"></path>
              <path
                d=\"M93.236 71.6093H95.3132V70.8045H93.236V69.8697H95.5209V69.0908H92.2754V73.3489H95.5988V72.57H93.236V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M99.6751 72.4404C99.4155 72.4404 99.2078 72.6481 99.2078 72.9078C99.2078 73.0636 99.2597 73.1934 99.3895 73.2972L99.1299 73.9204H99.5972L100.013 73.2972C100.091 73.1934 100.142 73.0636 100.142 72.9078C100.117 72.6222 99.9088 72.4404 99.6751 72.4404Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M109.36 70.2074C109.36 69.9738 109.567 69.8699 109.905 69.8699C110.242 69.8699 110.788 70.0517 111.229 70.3113L111.593 69.5064C111.177 69.2208 110.554 69.0391 109.957 69.0391C108.97 69.0391 108.295 69.5324 108.295 70.3113C108.295 71.8172 110.58 71.3498 110.58 72.1547C110.58 72.4144 110.346 72.5702 109.957 72.5702C109.515 72.5702 108.892 72.3105 108.451 71.9211L108.062 72.7C108.555 73.1154 109.256 73.375 109.957 73.375C110.892 73.375 111.645 72.9336 111.645 72.0768C111.645 70.5709 109.36 71.0123 109.36 70.2074Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M116.344 71.6093H118.396V70.8045H116.344V69.8697H118.629V69.0908H115.384V73.3489H118.707V72.57H116.344V71.6093Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M124.497 72.5182C123.77 72.5182 123.199 71.947 123.199 71.1941C123.199 70.4411 123.77 69.8699 124.497 69.8699C124.886 69.8699 125.328 70.0776 125.613 70.4152L126.184 69.7401C125.769 69.2987 125.12 69.0391 124.497 69.0391C123.199 69.0391 122.212 69.9738 122.212 71.1941C122.212 72.4403 123.173 73.375 124.445 73.375C125.068 73.375 125.717 73.0635 126.184 72.6221L125.613 71.999C125.302 72.3365 124.886 72.5182 124.497 72.5182Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M132.624 71.558C132.624 72.1811 132.234 72.5446 131.663 72.5446C131.092 72.5446 130.676 72.1811 130.676 71.558V69.0654H129.716V71.558C129.716 72.7004 130.469 73.4014 131.663 73.4014C132.831 73.4014 133.584 72.7004 133.584 71.558V69.0654H132.624V71.558Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M141.14 70.5708C141.14 69.6361 140.517 69.0908 139.374 69.0908H137.505V73.3749H138.466V72.1546H139.348H139.452L140.127 73.3749H141.218L140.309 71.9728C140.854 71.7132 141.14 71.2199 141.14 70.5708ZM139.374 71.3237H138.492V69.8697H139.374C139.894 69.8697 140.205 70.1034 140.205 70.5967C140.205 71.09 139.894 71.3237 139.374 71.3237Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M145.969 72.57V71.6093H148.021V70.8045H145.969V69.8697H148.254V69.0908H145.009V73.3489H148.332V72.57H145.969Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M13.4229 52.4743C13.4229 54.3437 16.2529 54.3437 16.2529 52.4743C16.2789 50.6049 13.4229 50.6049 13.4229 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M110.32 52.4743C110.32 50.6049 107.49 50.6049 107.49 52.4743C107.49 54.3437 110.32 54.3437 110.32 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M139.53 52.4743C139.53 50.6049 136.7 50.6049 136.7 52.4743C136.7 54.3437 139.53 54.3437 139.53 52.4743Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M88.3809 40.1932C87.8097 40.7644 86.9789 40.9721 86.1999 40.7644L83.0843 39.9336L80.9033 42.1146L85.1614 43.257C87.0827 43.7762 89.1339 43.231 90.5359 41.8289L100.35 32.0146L99.5454 29.0547L88.3809 40.1932Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M74.4383 44.815L80.9293 38.2981L79.0339 36.4287L72.543 42.9197L74.4383 44.815Z\" fill=\"#FCB408\">
              </path>
              <path
                d=\"M99.0523 6.82972L103.051 2.83129C103.57 2.31201 103.57 1.45519 103.051 0.935917C102.531 0.416639 101.675 0.416639 101.155 0.935917L97.157 4.93436L79.3717 0.182966C77.4763 -0.310348 75.4771 0.208934 74.075 1.55906L77.0609 2.36393L77.0869 2.33797L95.002 7.14129L94.1451 7.9981L81.8642 20.279L70.2324 17.1114C68.8044 16.722 67.3504 17.5788 66.9609 19.0068L81.2151 22.9014L85.1097 37.1556C86.5377 36.7661 87.3945 35.3121 87.0051 33.8841L83.8115 22.1484L96.0405 9.91943L96.8973 9.06262L99.26 17.9163L102.557 29.8597C103.83 28.4577 104.323 26.5104 103.83 24.6669L99.0523 6.82972Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M68.1816 25.5497L66.2602 23.6543L60.0029 29.9376L61.8983 31.8329L68.1816 25.5497Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M62.1317 24.0182L64.3127 21.8372L63.2222 17.7609C63.0145 16.982 63.2481 16.1512 63.7934 15.5799L74.88 4.49336L71.8941 3.68848L62.1836 13.399C60.7816 14.801 60.2363 16.8522 60.7556 18.7735L62.1317 24.0182Z\"
                fill=\"#FCB408\"></path>
              <path d=\"M64.8321 37.3036L58.5166 43.6191L60.4076 45.5101L66.7231 39.1946L64.8321 37.3036Z\"
                fill=\"#FCB408\"></path>
              <path
                d=\"M76.697 29.2362L74.8016 27.3408L68.1289 34.0135L70.0243 35.9089C70.0243 35.9089 75.3209 30.5863 76.697 29.2362Z\"
                fill=\"#FCB408\"></path>
            </svg>
          </a>
        </div>
        <div class=\"footer__menu\">
          <ul>
            <li><a href=\"#\">О компании</a></li>
            <li>
              {% if this.page.url == '/' %}
              <a class=\"order-js\" href=\"#etaps\">{{'Как это работает'|_}}</a>
              {% else %}
              <a href=\"{{ 'home'|page }}#etaps\">{{'Как это работает'|_}}</a>
              {% endif %}
            </li>
            <li><a href=\"{{'faq'|_}}\">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">{{'Клиентам'|_}}</h2>
        <div class=\"footer__menu\">
          <ul>
            <li>
              {% if user %}
              <a href=\"{{'personal'|page}}\">{{'Личный кабинет'|_}}</a>
              {% else %}
              <a href=\"{{'registration'|page}}\">{{'Регистрация'|_}}</a>
              {% endif %}
            </li>
            <li>
              <a class=\"cost-calc-js order-js\" href=\"#calculator\">{{'Расчёт онлайн'|_}}</a>
            </li>
            {% if user %}
            <li><a class=\"tracking-js\" href=\"{{'personal'|page}}\">{{'Отследить мой груз'|_}}</a></li>
            {% endif %}
          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">{{'Услуги'|_}}</h2>
        <div class=\"footer__menu\">



          {% set records = services.records %}
          {% set displayColumn = services.displayColumn %}
          {% set noRecordsMessage = services.noRecordsMessage %}
          {% set detailsPage = services.detailsPage %}
          {% set detailsKeyColumn = services.detailsKeyColumn %}
          {% set detailsUrlParameter = services.detailsUrlParameter %}
          <ul>
            {% for record in records %}
            <li>
              <a
                href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">{{record.title}}</a>
            </li>
            {% endfor %}
          </ul>
        </div>
      </div>
      <div class=\"footer__col\">
        <h2 class=\"title\">{{'Контакты'|_}}</h2>
        <div class=\"info\">
          <div class=\"info__item\"><i class=\"icon-phone\"> </i><a href=\"tel:{{this.theme.phone}}\">{{this.theme.phone}}</a>
          </div>
          <div class=\"info__item\"><i class=\"icon-marker\"></i>
            <ul>
              <li>Address: {{this.theme.address}} </li>
              <li>City: {{this.theme.city}}</li>
              <li>State: {{this.theme.state}} </li>
              <li>Zip Code: {{this.theme.zip_code}}</li>
            </ul>
          </div>
          <div class=\"info__item\"><i class=\"icon-envelope\"> </i><a
              href=\"mailto:{{this.theme.email}}\">{{this.theme.email}}</a></div>
        </div>
      </div>
    </div>
    <div class=\"footer__bottom\">
      <div class=\"footer__bottom-col\">
        <p>© {{ post.published_at|date(\"Y\") }} “Silk Road Shipping”. {{'Все права защищены'|_}}</p>
      </div>
      <div class=\"footer__bottom-col\">
        <div class=\"social\">
          <ul>
            {% for item in this.theme.social %}
            <li>
              <a href=\"{{item.url}}\" target=\"_blank\">
                <i class=\"{{item.awesome_icon}}\"></i>
              </a>
            </li>
            {%endfor%}
            <li>
              <a href=\"mailto:{{this.theme.email}}\" target=\"_blank\">
                <i class=\"icon-envelope\" style=\"font-size: 11px; margin-left: -3px;\"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class=\"footer__bottom-col\">
        <p>{{'Положение о защите персональных данных'|_}}</p>
      </div>
    </div>
  </div>
</footer>", "C:\\work\\OpenServer\\domains\\silk-road.loc/themes/silk-road/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 136, "set" => 172, "for" => 179);
        static $filters = array("page" => 6, "_" => 137, "escape" => 182, "date" => 208);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['page', '_', 'escape', 'date'],
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
