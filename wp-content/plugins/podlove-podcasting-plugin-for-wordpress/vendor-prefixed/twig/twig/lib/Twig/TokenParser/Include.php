<?php

namespace PodlovePublisher_Vendor;

use PodlovePublisher_Vendor\Twig\TokenParser\IncludeTokenParser;
\class_exists('PodlovePublisher_Vendor\\Twig\\TokenParser\\IncludeTokenParser');
@\trigger_error(\sprintf('Using the "Twig_TokenParser_Include" class is deprecated since Twig version 2.7, use "Twig\\TokenParser\\IncludeTokenParser" instead.'), \E_USER_DEPRECATED);
if (\false) {
    /** @deprecated since Twig 2.7, use "Twig\TokenParser\IncludeTokenParser" instead */
    class Twig_TokenParser_Include extends IncludeTokenParser
    {
    }
}
