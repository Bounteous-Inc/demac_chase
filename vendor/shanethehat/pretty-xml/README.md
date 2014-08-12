# pretty-xml

A tiny library for pretty printing XML, inspired purely from DomDocument's lack of ability to configure indent distance.

[![Build Status](https://travis-ci.org/shanethehat/pretty-xml.png?branch=master)](https://travis-ci.org/shanethehat/pretty-xml)

## Usage

Install by adding to your composer.json:

```
{
    "require": {
        "shanethehat/pretty-xml": "~0.2"
    }
}
```

To use, just give it a badly indented (but well formed) XML string:

```
use PrettyXml/Formatter;

$formatter = new Formatter();
echo $formatter->format('<?xml version="1.0" encoding="UTF-8"?><foo><bar>Baz</bar></foo>');
```

You can also change the size of the indent: ```$formatter->setIndentSize(2);```

And you can change the indent character: ```$formatter->getIndentCharacter("\t");```

## License and Authors

Authors: <https://github.com/shanethehat/pretty-xml/contributors>

Copyright (C) 2014

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies
of the Software, and to permit persons to whom the Software is furnished to do
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
