<?php

namespace PodlovePublisher_Vendor;

/**
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @author Ricard Clau <ricard.clau@gmail.com>
 */
class Twig_Extensions_Extension_Array extends Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        $filters = array(new Twig_SimpleFilter('shuffle', 'twig_shuffle_filter'));
        return $filters;
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'array';
    }
}
/**
 * This file is part of Twig.
 *
 * (c) 2009 Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @author Ricard Clau <ricard.clau@gmail.com>
 */
@\class_alias('PodlovePublisher_Vendor\\Twig_Extensions_Extension_Array', 'Twig_Extensions_Extension_Array', \false);
/**
 * Shuffles an array.
 *
 * @param array|Traversable $array An array
 *
 * @return array
 */
function twig_shuffle_filter($array)
{
    if ($array instanceof \Traversable) {
        $array = \iterator_to_array($array, \false);
    }
    \shuffle($array);
    return $array;
}
@\class_alias('PodlovePublisher_Vendor\\Twig_Extensions_Extension_Array', 'PodlovePublisher_Vendor\\Twig\\Extensions\\ArrayExtension', \false);
