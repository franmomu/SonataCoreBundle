<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Form\Type;

@trigger_error(
    'The '.__NAMESPACE__.'\BaseDoctrineORMSerializationType class is deprecated since version 3.x and will be removed in 4.0.'
    .' Use Sonata\Form\Type\BaseDoctrineORMSerializationType instead.',
    E_USER_DEPRECATED
);

class_alias(
    \Sonata\Form\Type\BaseDoctrineORMSerializationType::class,
    __NAMESPACE__.'\BaseDoctrineORMSerializationType'
);

if (false) {
    /**
     * @deprecated Since version 3.x, to be removed in 4.0.
     */
    class BaseDoctrineORMSerializationType extends \Sonata\Form\Type\BaseDoctrineORMSerializationType
    {
    }
}
