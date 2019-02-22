The Widget class
================
2019-02-21 --> 2019-02-22




Introduction
============

A base widget that every widget can extend.



Class synopsis
==============


abstract class <span class="pl-k">Widget</span> implements [WidgetInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface.md) {

- Properties
    - protected array [$options](#property-options) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/__construct.md)() : void
    - public [setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md)(array $options) : void

- Inherited methods
    - abstract public [WidgetInterface::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface/render.md)() : string

}




Properties
=============

- <span id="property-options"><b>options</b></span>

    This property holds an array of options to use. Options affect the behaviour of the instance and
    are specific to the concrete class.
    
    



Methods
==============

- [Widget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/__construct.md) &ndash; Builds the Widget instance.
- [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [WidgetInterface::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface/render.md) &ndash; Returns the rendered widget.




Location
=============
DocTools\Widget\Widget