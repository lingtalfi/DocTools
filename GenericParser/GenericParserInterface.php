<?php


namespace Ling\DocTools\GenericParser;


use Ling\DocTools\Info\InfoInterface;

/**
 * The GenericParserInterface interface is a generic interface for parsers.
 * It's implemented by the @class(Ling\DocTools\ClassParser\ClassParser) class and the @class(Ling\DocTools\PlanetParser\PlanetParser) class.
 *
 */
interface GenericParserInterface
{


    /**
     * Parses the given $element and returns a @class(Ling\DocTools\Info\InfoInterface) object.
     *
     * @param string $element . The element to parse.
     * @return InfoInterface. The info interface.
     */
    public function parse(string $element): InfoInterface;
}