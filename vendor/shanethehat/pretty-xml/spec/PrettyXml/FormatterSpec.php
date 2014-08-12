<?php

namespace spec\PrettyXml;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FormatterSpec extends ObjectBehavior
{
    function it_indents_a_nested_element()
    {
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar>Baz</bar></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar>Baz</bar>
</foo>
XML
            );
    }

    function it_indents_two_nested_elements()
    {
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar>Baz</bar><egg>Bacon</egg></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar>Baz</bar>
    <egg>Bacon</egg>
</foo>
XML
            );
    }

    function it_indents_a_nested_empty_element()
    {
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar /></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar />
</foo>
XML
            );
    }

    function it_indents_double_nested_elements()
    {
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar><egg /></bar></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar>
        <egg />
    </bar>
</foo>
XML
            );
    }

    function it_indents_a_nested_element_with_an_attribute()
    {
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar a="b">Baz</bar></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar a="b">Baz</bar>
</foo>
XML
            );
    }

    function it_can_change_the_size_of_the_indent()
    {
        $this->setIndentSize(2);
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar>Baz</bar></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
  <bar>Baz</bar>
</foo>
XML
            );
    }

    function it_can_change_the_indent_character()
    {
        $this->setIndentCharacter('_');
        $this->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar>Baz</bar></foo>')
            ->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
____<bar>Baz</bar>
</foo>
XML
            );
    }

    function it_removes_existing_excess_whitespace()
    {
        $this->format(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar>Baz</bar>
    <egg><bacon>Yum</bacon></egg>
</foo>
XML
        )->shouldReturn(<<<XML
<?xml version="1.0" encoding="UTF-8"?>
<foo>
    <bar>Baz</bar>
    <egg>
        <bacon>Yum</bacon>
    </egg>
</foo>
XML
        );
    }
}
