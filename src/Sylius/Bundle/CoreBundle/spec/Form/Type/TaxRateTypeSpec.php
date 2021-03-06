<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\CoreBundle\Form\Type;

use PhpSpec\ObjectBehavior;
use Sylius\Bundle\TaxationBundle\Form\Type\TaxRateType;
use Symfony\Component\Form\FormTypeInterface;

class TaxRateTypeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('TaxRate', []);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\CoreBundle\Form\Type\TaxRateType');
    }

    function it_should_be_a_form_type()
    {
        $this->shouldImplement(FormTypeInterface::class);
    }

    function it_should_extend_Sylius_tax_rate_form_type()
    {
        $this->shouldHaveType(TaxRateType::class);
    }
}
