DocTools
================
2019-02-21 --> 2019-02-22



A tool to create well-formatted php classes.


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).


Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import DocTools
```

Or just download it and place it where you want otherwise.



Table of contents
===========

- [ClassParser](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser.md) &ndash; The ClassParser class is a generic implementation of the ClassParserInterface.
    - [ClassParser::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/__construct.md) &ndash; Builds the ClassParser instance.
    - [ClassParser::parse](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/parse.md) &ndash; Returns a ClassInfo object from the given $className.
    - [ClassParser::setResolveInlineTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/setResolveInlineTags.md) &ndash; Sets the resolveInlineTags.
    - [ClassParser::getReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/getReport.md) &ndash; Returns the report of this instance.
    - [ClassParser::setReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/setReport.md) &ndash; Sets the report.
    - [ClassParser::setNotationlInterpreter](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParser/setNotationlInterpreter.md) &ndash; Sets the notationInterpreter.
- [ClassParserInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParserInterface.md) &ndash; The ClassParserInterface interface represents a class parser.
    - [ClassParserInterface::parse](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParserInterface/parse.md) &ndash; Returns a ClassInfo object from the given $className.
    - [ClassParserInterface::getReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/ClassParser/ClassParserInterface/getReport.md) &ndash; Returns the parser report.
- [CopyModule](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/CopyModule/CopyModule.md) &ndash; The CopyModule class.
    - [CopyModule::copy](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/CopyModule/CopyModule/copy.md) &ndash; Copies the $sourceDir recursively to the $destinationDir, using the given $interpreter during the transfer.
- [CopyModuleInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/CopyModule/CopyModuleInterface.md) &ndash; The CopyModuleInterface interface.
    - [CopyModuleInterface::copy](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/CopyModule/CopyModuleInterface/copy.md) &ndash; Copies the $sourceDir recursively to the $destinationDir, using the given $interpreter during the transfer.
- [DocBuilder](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/DocBuilder.md) &ndash; The DocBuilder class.
    - [DocBuilder::prepare](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/DocBuilder/prepare.md) &ndash; Prepares the doc builder instance.
    - [DocBuilder::buildDoc](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/DocBuilder/buildDoc.md) &ndash; and according to the writeMode property.
    - [DocBuilder::showReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/DocBuilder/showReport.md) &ndash; Displays the report.
- [LingGitPhpPlanetDocBuilder](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/Git/PhpPlanet/LingGitPhpPlanetDocBuilder.md) &ndash; The LingGitPhpPlanetDocBuilder class.
    - [LingGitPhpPlanetDocBuilder::prepare](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/Git/PhpPlanet/LingGitPhpPlanetDocBuilder/prepare.md) &ndash; Prepares the doc builder instance.
    - [LingGitPhpPlanetDocBuilder::buildDoc](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/Git/PhpPlanet/LingGitPhpPlanetDocBuilder/buildDoc.md) &ndash; and according to the writeMode property.
    - [DocBuilder::showReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/DocBuilder/DocBuilder/showReport.md) &ndash; Displays the report.
- [BadWidgetConfigurationException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/BadWidgetConfigurationException.md) &ndash; cannot render properly.
- [ClassParserException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/ClassParserException.md) &ndash; DocTools\ClassParser\ClassParser class when it encounters a problem.
- [CopyModuleException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/CopyModuleException.md) &ndash; encounters a problem.
- [DocBuilderException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/DocBuilderException.md) &ndash; The DocBuilderException class is thrown when a problems occurs with a doc builder.
- [DocToolsException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/DocToolsException.md) &ndash; The DocToolsException class is the base class for all the exceptions of the DocTools planet.
- [PlanetParserException](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Exception/PlanetParserException.md) &ndash; DocTools\PlanetParser\PlanetParser class when it encounters a problem.
- [DefaultGeneratedDocStyle](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle.md) &ndash; The DefaultGeneratedDocStyle class.
    - [DefaultGeneratedDocStyle::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/__construct.md) &ndash; Builds the DefaultGeneratedDocStyle instance.
    - [DefaultGeneratedDocStyle::setExtension](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/setExtension.md) &ndash; Sets the extension.
    - [DefaultGeneratedDocStyle::getClassUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/getClassUrl.md) &ndash; Returns the class url.
    - [DefaultGeneratedDocStyle::getMethodUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/getMethodUrl.md) &ndash; Returns the method url.
    - [DefaultGeneratedDocStyle::getPlanetPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/getPlanetPageRelativePath.md) &ndash; Returns the relative path to the planet documentation page.
    - [DefaultGeneratedDocStyle::getClassPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/getClassPageRelativePath.md) &ndash; Returns the relative path to the class documentation page.
    - [DefaultGeneratedDocStyle::getMethodPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/DefaultGeneratedDocStyle/getMethodPageRelativePath.md) &ndash; Returns the relative path to the method documentation page.
- [GeneratedDocStyleInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface.md) &ndash; The GeneratedDocStyleInterface interface.
    - [GeneratedDocStyleInterface::getClassUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface/getClassUrl.md) &ndash; Returns the class url.
    - [GeneratedDocStyleInterface::getMethodUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface/getMethodUrl.md) &ndash; Returns the method url.
    - [GeneratedDocStyleInterface::getPlanetPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface/getPlanetPageRelativePath.md) &ndash; Returns the relative path to the planet documentation page.
    - [GeneratedDocStyleInterface::getClassPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface/getClassPageRelativePath.md) &ndash; Returns the relative path to the class documentation page.
    - [GeneratedDocStyleInterface::getMethodPageRelativePath](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GeneratedDocStyle/GeneratedDocStyleInterface/getMethodPageRelativePath.md) &ndash; Returns the relative path to the method documentation page.
- [GenericParserInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GenericParser/GenericParserInterface.md) &ndash; The GenericParserInterface interface is a generic interface for parsers.
    - [GenericParserInterface::parse](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/GenericParser/GenericParserInterface/parse.md) &ndash; Parses the given $element and returns a [DocTools\Info\InfoInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/InfoInterface.md) object.
- [CommentHelper](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/CommentHelper.md) &ndash; The CommentHelper class.
    - [CommentHelper::displaySeeAlsoItemsSentence](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/CommentHelper/displaySeeAlsoItemsSentence.md) &ndash; Returns a human sentence out of the see items collected into the given CommentInfo instance.
- [MethodHelper](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/MethodHelper.md) &ndash; The MethodHelper class.
    - [MethodHelper::getMethodReturnType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/MethodHelper/getMethodReturnType.md) &ndash; Returns the method's return type, with links to class names when possible.
    - [MethodHelper::getMethodSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/MethodHelper/getMethodSignature.md) &ndash; Returns a method signature with links to class names when possible.
- [PhpClassHelper](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/PhpClassHelper.md) &ndash; The PhpClassHelper class.
    - [PhpClassHelper::getClasses2Urls](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Helper/PhpClassHelper/getClasses2Urls.md) &ndash; Returns a map of php class to url.
- [ClassInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo.md) &ndash; The ClassInfo class.
    - [ClassInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/__construct.md) &ndash; Builds the ClassInfo instance.
    - [ClassInfo::getComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getComment.md) &ndash; Returns the comment, or null if the comment doesn't exist.
    - [ClassInfo::getProperties](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getProperties.md) &ndash; Returns an array of [PropertyInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo.md).
    - [ClassInfo::getMethods](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getMethods.md) &ndash; Returns an array of [MethodInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo.md).
    - [ClassInfo::getOwnMethods](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getOwnMethods.md) &ndash; Returns the list of [MethodInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo.md) declared by this class (i.e.
    - [ClassInfo::setComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setComment.md) &ndash; Sets the comment.
    - [ClassInfo::addProperty](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/addProperty.md) &ndash; Adds a property.
    - [ClassInfo::addMethod](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/addMethod.md) &ndash; Adds a method to this classInfo instance.
    - [ClassInfo::getName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getName.md) &ndash; Returns the name of the class.
    - [ClassInfo::setName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setName.md) &ndash; Sets the name.
    - [ClassInfo::getSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getSignature.md) &ndash; Returns the signature.
    - [ClassInfo::setSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setSignature.md) &ndash; Sets the signature.
    - [ClassInfo::getShortName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getShortName.md) &ndash; Returns the class short name.
    - [ClassInfo::setShortName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setShortName.md) &ndash; Sets the class short name.
    - [ClassInfo::getInterfaces](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getInterfaces.md) &ndash; Returns the interface class names.
    - [ClassInfo::setInterfaces](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setInterfaces.md) &ndash; Sets the interface class names.
    - [ClassInfo::getReflectionClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/getReflectionClass.md) &ndash; Returns the reflectionClass of this instance.
    - [ClassInfo::setReflectionClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/setReflectionClass.md) &ndash; Sets the reflectionClass.
    - [ClassInfo::hasProperties](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo/hasProperties.md) &ndash; Returns whether the class has (direct) properties.
- [CommentInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md) &ndash; The CommentInfo class.
    - [CommentInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/__construct.md) &ndash; Builds the CommentInfo instance.
    - [CommentInfo::getRawText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getRawText.md) &ndash; Returns the raw text.
    - [CommentInfo::getMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getMainText.md) &ndash; Returns the main text.
    - [CommentInfo::hasEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/hasEmptyMainText.md) &ndash; Returns whether the main text of this comment is empty.
    - [CommentInfo::getTagContent](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getTagContent.md) &ndash; Returns the body of the given $tag, or the $default value if the tag isn't defined.
    - [CommentInfo::getTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getTags.md) &ndash; The getTags method
    - [CommentInfo::getTagsByName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getTagsByName.md) &ndash; Returns all tags with the given $tagName associated with this comment.
    - [CommentInfo::getTagByName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getTagByName.md) &ndash; Returns the first $tagName tag associated with this comment.
    - [CommentInfo::hasTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/hasTag.md) &ndash; Returns whether the comment has the tag $tagName.
    - [CommentInfo::setRawText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setRawText.md) &ndash; Sets the raw text of this comment.
    - [CommentInfo::setMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setMainText.md) &ndash; Sets the main text of the comment.
    - [CommentInfo::setTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setTags.md) &ndash; Sets the tags for this comment.
    - [CommentInfo::getFirstLine](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getFirstLine.md) &ndash; Returns the first line of the main text (see class description for more details).
    - [CommentInfo::setFirstLine](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setFirstLine.md) &ndash; Sets the first line for this comment.
    - [CommentInfo::getFirstSentence](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getFirstSentence.md) &ndash; Returns the firstSentence of this instance.
    - [CommentInfo::setFirstSentence](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setFirstSentence.md) &ndash; Sets the firstSentence.
    - [CommentInfo::isEmpty](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/isEmpty.md) &ndash; Returns whether the comment is empty.
    - [CommentInfo::getSeeItems](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/getSeeItems.md) &ndash; Returns the seeItems of this instance.
    - [CommentInfo::setSeeItems](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo/setSeeItems.md) &ndash; Sets the seeItems.
- [InfoInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/InfoInterface.md) &ndash; The InfoInterface interface is the interface for all info objects.
- [MethodInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo.md) &ndash; The MethodInfo class represents information about a method (of a class).
    - [MethodInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/__construct.md) &ndash; Builds the MethodInfo instance.
    - [MethodInfo::getVisibility](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getVisibility.md) &ndash; Returns the visibility of the method.
    - [MethodInfo::setVisibility](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setVisibility.md) &ndash; Sets the visibility for this method.
    - [MethodInfo::getComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getComment.md) &ndash; Returns the [CommentInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md) instance.
    - [MethodInfo::setComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setComment.md) &ndash; Sets the comment for this instance.
    - [MethodInfo::getSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getSignature.md) &ndash; Returns the signature of this method.
    - [MethodInfo::setSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setSignature.md) &ndash; Sets the signature.
    - [MethodInfo::getName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getName.md) &ndash; Returns the name of the method.
    - [MethodInfo::setName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setName.md) &ndash; Sets the name of the method.
    - [MethodInfo::getReflectionMethod](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getReflectionMethod.md) &ndash; Returns the reflectionMethod of this instance.
    - [MethodInfo::setReflectionMethod](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setReflectionMethod.md) &ndash; Sets the reflectionMethod.
    - [MethodInfo::getDeclaringClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getDeclaringClass.md) &ndash; Returns the declaringClass of this instance.
    - [MethodInfo::getReturnType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getReturnType.md) &ndash; Returns the returnType of this instance.
    - [MethodInfo::setReturnType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setReturnType.md) &ndash; Sets the returnType.
    - [MethodInfo::setReturnDescription](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/setReturnDescription.md) &ndash; Sets the returnDescription.
    - [MethodInfo::hasParameters](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/hasParameters.md) &ndash; Returns whether the method has at least one parameter.
    - [MethodInfo::addParameter](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/addParameter.md) &ndash; Adds a DocTools\Info\ParameterInfo to this instance.
    - [MethodInfo::getParameters](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getParameters.md) &ndash; Returns the parameters of this instance.
    - [MethodInfo::getReturnDescription](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/MethodInfo/getReturnDescription.md) &ndash; Returns the returnDescription of this instance.
- [ParameterInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo.md) &ndash; The ParameterInfo class.
    - [ParameterInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/__construct.md) &ndash; Builds the ParameterInfo instance.
    - [ParameterInfo::getName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/getName.md) &ndash; Returns the name of this instance.
    - [ParameterInfo::setName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/setName.md) &ndash; Sets the name.
    - [ParameterInfo::getType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/getType.md) &ndash; Returns the type of this instance.
    - [ParameterInfo::setType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/setType.md) &ndash; Sets the type.
    - [ParameterInfo::getDefaultValue](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/getDefaultValue.md) &ndash; Returns the defaultValue of this instance.
    - [ParameterInfo::setDefaultValue](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/setDefaultValue.md) &ndash; Sets the defaultValue.
    - [ParameterInfo::getValueAlternatives](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/getValueAlternatives.md) &ndash; Returns the valueAlternatives of this instance.
    - [ParameterInfo::setValueAlternatives](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/setValueAlternatives.md) &ndash; Sets the valueAlternatives.
    - [ParameterInfo::getDescriptiveText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/getDescriptiveText.md) &ndash; Returns the descriptiveText of this instance.
    - [ParameterInfo::setDescriptiveText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ParameterInfo/setDescriptiveText.md) &ndash; Sets the descriptiveText.
- [PlanetInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo.md) &ndash; The PlanetInfo class.
    - [PlanetInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/__construct.md) &ndash; Builds the PlanetInfo instance.
    - [PlanetInfo::getDependencies](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/getDependencies.md) &ndash; Returns the array of dependencies to other planets.
    - [PlanetInfo::setDependencies](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/setDependencies.md) &ndash; Sets the dependencies for this instance.
    - [PlanetInfo::getClasses](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/getClasses.md) &ndash; Returns the array of [ClassInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/ClassInfo.md) instances found in this planet.
    - [PlanetInfo::addClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/addClass.md) &ndash; Adds a class to this instance.
    - [PlanetInfo::getClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/getClass.md) &ndash; or null otherwise.
    - [PlanetInfo::getName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/getName.md) &ndash; Returns the name of the planet.
    - [PlanetInfo::setName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PlanetInfo/setName.md) &ndash; Sets the name of this planet.
- [PropertyInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo.md) &ndash; The PropertyInfo class represents information about a property (of a class).
    - [PropertyInfo::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/__construct.md) &ndash; Builds the PropertyInfo instance.
    - [PropertyInfo::getComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getComment.md) &ndash; Returns the [CommentInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md) instance for this property.
    - [PropertyInfo::setComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setComment.md) &ndash; Sets the comment.
    - [PropertyInfo::getName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getName.md) &ndash; Returns the name of this property.
    - [PropertyInfo::setName](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setName.md) &ndash; Sets the name of this property.
    - [PropertyInfo::getSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getSignature.md) &ndash; Returns the signature for this property.
    - [PropertyInfo::setSignature](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setSignature.md) &ndash; Sets the signature for this property.
    - [PropertyInfo::getVisibility](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getVisibility.md) &ndash; Returns the visibility of this instance.
    - [PropertyInfo::setVisibility](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setVisibility.md) &ndash; Sets the visibility.
    - [PropertyInfo::getDeclaringClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getDeclaringClass.md) &ndash; Returns the declaringClass of this instance.
    - [PropertyInfo::getReflectionProperty](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getReflectionProperty.md) &ndash; Returns the reflectionProperty of this instance.
    - [PropertyInfo::setReflectionProperty](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setReflectionProperty.md) &ndash; Sets the reflectionProperty.
    - [PropertyInfo::getDefaultValue](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getDefaultValue.md) &ndash; Returns the default value of this property, or null if there is no default value.
    - [PropertyInfo::getType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/getType.md) &ndash; Returns the type of this instance.
    - [PropertyInfo::setType](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/PropertyInfo/setType.md) &ndash; Sets the type.
- [DocToolInterpreter](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter.md) &ndash; The DocToolInterpreter class is a helper tool to interpret the docTool markup language.
    - [DocToolInterpreter::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter/__construct.md) &ndash; Builds the DocToolInterpreter instance.
    - [DocToolInterpreter::resolveInlineTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter/resolveInlineTags.md) &ndash; Resolves the [inline tags](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions) in the given $string, and returns the result.
    - [DocToolInterpreter::interpretBlockLevelTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter/interpretBlockLevelTags.md) &ndash; Interprets the given $tags, and potentially configures the $comment accordingly.
    - [DocToolInterpreter::setGeneratedItemsToUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter/setGeneratedItemsToUrl.md) &ndash; Sets the generatedItems2Url.
    - [DocToolInterpreter::setKeyword2UrlMap](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/DocToolInterpreter/setKeyword2UrlMap.md) &ndash; Sets the keyword2UrlMap.
- [NotationInterpreterInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/NotationInterpreterInterface.md) &ndash; The NotationInterpreterInterface interface represents a notation interpreter.
    - [NotationInterpreterInterface::resolveInlineTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/NotationInterpreterInterface/resolveInlineTags.md) &ndash; Resolves the [inline tags](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions) in the given $string, and returns the result.
    - [NotationInterpreterInterface::interpretBlockLevelTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Interpreter/NotationInterpreterInterface/interpretBlockLevelTags.md) &ndash; Interprets the given $tags, and potentially configures the $comment accordingly.
- [PageUtil](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil.md) &ndash; The PageUtil class is a tool to create pages of your documentation.
    - [PageUtil::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil/__construct.md) &ndash; Builds the PageUtil instance.
    - [PageUtil::setRootDir](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil/setRootDir.md) &ndash; Sets the root dir.
    - [PageUtil::setInsertsRootDir](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil/setInsertsRootDir.md) &ndash; Sets the insertsRootDir.
    - [PageUtil::setTranslator](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil/setTranslator.md) &ndash; Sets the translator.
    - [PageUtil::createPage](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Page/PageUtil/createPage.md) &ndash; Creates the page in $file, based on the given $template and $variables.
- [PlanetParser](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser.md) &ndash; The PlanetParser class.
    - [PlanetParser::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/__construct.md) &ndash; Builds the PlanetParser instance.
    - [PlanetParser::parse](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/parse.md) &ndash; and creates a PlanetReport (retrieved using the getReport method).
    - [PlanetParser::setClassParser](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/setClassParser.md) &ndash; Sets the class parser.
    - [PlanetParser::getReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/getReport.md) &ndash; Returns the report.
    - [PlanetParser::setReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/setReport.md) &ndash; Sets the report.
    - [PlanetParser::setResolveInlineTags](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/setResolveInlineTags.md) &ndash; Sets the resolveInlineTags.
    - [PlanetParser::setNotationInterpreter](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/PlanetParser/PlanetParser/setNotationInterpreter.md) &ndash; Sets the notation interpreter.
- [AbstractReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport.md) &ndash; The AbstractReport class is an abstract implementation of the ReportInterface.
    - [AbstractReport::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/__construct.md) &ndash; Builds the PlanetReport instance.
    - [AbstractReport::setCurrentContext](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/setCurrentContext.md) &ndash; Sets the current context.
    - [AbstractReport::setIgnore](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/setIgnore.md) &ndash; Sets the ignore array.
    - [AbstractReport::addParsedInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParsedInlineFunction.md) &ndash; Adds the function name and the args of an [inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions).
    - [AbstractReport::addParsedBlockLevelTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParsedBlockLevelTag.md) &ndash; Adds the [block-level tag](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#block-level-tags) to an internal collection.
    - [AbstractReport::addUnknownInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnknownInlineFunction.md) &ndash; Adds an unknown inline function.
    - [AbstractReport::addUndefinedInlineKeyword](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUndefinedInlineKeyword.md) &ndash; Adds an undefined keyword (defined with the [keyword inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [AbstractReport::addUndefinedInlineClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUndefinedInlineClass.md) &ndash; Adds an undefined class (defined with the [class inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [AbstractReport::addUnresolvedImplementationTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedImplementationTag.md) &ndash; an unresolved @implementation tag.
    - [AbstractReport::addUnresolvedOverridesTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedOverridesTag.md) &ndash; an unresolved @overrides tag.
    - [AbstractReport::addClassWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addClassWithoutComment.md) &ndash; Adds the name of a class which doesn't have a non-empty doc comment.
    - [AbstractReport::addMethodWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithoutComment.md) &ndash; Adds the name and the visibility of a method which doesn't have a non-empty doc comment.
    - [AbstractReport::addMethodWithoutReturnTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithoutReturnTag.md) &ndash; Adds the name of a method which doesn't have a "@return" tag.
    - [AbstractReport::addParameterWithoutParamTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParameterWithoutParamTag.md) &ndash; Adds the name of a property (and method) which doesn't have a "@param" tag specified.
    - [AbstractReport::addPropertyWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithoutComment.md) &ndash; Adds the name and the visibility of a property which doesn't have a non-empty doc comment.
    - [AbstractReport::addPropertyWithoutVarTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithoutVarTag.md) &ndash; Adds the name of a property which doesn't have a "@var" tag specified.
    - [AbstractReport::addUnresolvedClassReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedClassReference.md) &ndash; Adds an unresolved class reference.
    - [AbstractReport::addUnresolvedMethodReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedMethodReference.md) &ndash; Adds an unresolved method reference.
    - [AbstractReport::addClassWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addClassWithEmptyMainText.md) &ndash; Adds a class with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [AbstractReport::addPropertyWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithEmptyMainText.md) &ndash; Adds a property with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [AbstractReport::addMethodWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithEmptyMainText.md) &ndash; Adds a method with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [ReportInterface::__toString](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/__toString.md) &ndash; Builds and returns the rendered report as a string.
- [HtmlReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/HtmlReport.md) &ndash; The HtmlReport class is an html implementation of the ReportInterface.
    - [HtmlReport::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/HtmlReport/__construct.md) &ndash; Builds the HtmlReport instance.
    - [HtmlReport::setTemplate](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/HtmlReport/setTemplate.md) &ndash; Sets the template.
    - [HtmlReport::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/HtmlReport/setOptions.md) &ndash; Sets the options.
    - [HtmlReport::__toString](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/HtmlReport/__toString.md) &ndash; Builds and returns the rendered report as an html string.
    - [AbstractReport::setCurrentContext](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/setCurrentContext.md) &ndash; Sets the current context.
    - [AbstractReport::setIgnore](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/setIgnore.md) &ndash; Sets the ignore array.
    - [AbstractReport::addParsedInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParsedInlineFunction.md) &ndash; Adds the function name and the args of an [inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions).
    - [AbstractReport::addParsedBlockLevelTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParsedBlockLevelTag.md) &ndash; Adds the [block-level tag](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#block-level-tags) to an internal collection.
    - [AbstractReport::addUnknownInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnknownInlineFunction.md) &ndash; Adds an unknown inline function.
    - [AbstractReport::addUndefinedInlineKeyword](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUndefinedInlineKeyword.md) &ndash; Adds an undefined keyword (defined with the [keyword inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [AbstractReport::addUndefinedInlineClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUndefinedInlineClass.md) &ndash; Adds an undefined class (defined with the [class inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [AbstractReport::addUnresolvedImplementationTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedImplementationTag.md) &ndash; an unresolved @implementation tag.
    - [AbstractReport::addUnresolvedOverridesTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedOverridesTag.md) &ndash; an unresolved @overrides tag.
    - [AbstractReport::addClassWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addClassWithoutComment.md) &ndash; Adds the name of a class which doesn't have a non-empty doc comment.
    - [AbstractReport::addMethodWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithoutComment.md) &ndash; Adds the name and the visibility of a method which doesn't have a non-empty doc comment.
    - [AbstractReport::addMethodWithoutReturnTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithoutReturnTag.md) &ndash; Adds the name of a method which doesn't have a "@return" tag.
    - [AbstractReport::addParameterWithoutParamTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addParameterWithoutParamTag.md) &ndash; Adds the name of a property (and method) which doesn't have a "@param" tag specified.
    - [AbstractReport::addPropertyWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithoutComment.md) &ndash; Adds the name and the visibility of a property which doesn't have a non-empty doc comment.
    - [AbstractReport::addPropertyWithoutVarTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithoutVarTag.md) &ndash; Adds the name of a property which doesn't have a "@var" tag specified.
    - [AbstractReport::addUnresolvedClassReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedClassReference.md) &ndash; Adds an unresolved class reference.
    - [AbstractReport::addUnresolvedMethodReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addUnresolvedMethodReference.md) &ndash; Adds an unresolved method reference.
    - [AbstractReport::addClassWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addClassWithEmptyMainText.md) &ndash; Adds a class with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [AbstractReport::addPropertyWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addPropertyWithEmptyMainText.md) &ndash; Adds a property with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [AbstractReport::addMethodWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/AbstractReport/addMethodWithEmptyMainText.md) &ndash; Adds a method with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
- [ReportInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface.md) &ndash; The ReportInterface interface is the interface for all reports.
    - [ReportInterface::setCurrentContext](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/setCurrentContext.md) &ndash; Sets the name of the current context being parsed.
    - [ReportInterface::addParsedInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addParsedInlineFunction.md) &ndash; Adds the function name and the args of an [inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions).
    - [ReportInterface::addParsedBlockLevelTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addParsedBlockLevelTag.md) &ndash; Adds the [block-level tag](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#block-level-tags) to an internal collection.
    - [ReportInterface::addUnknownInlineFunction](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUnknownInlineFunction.md) &ndash; Adds an unknown inline function.
    - [ReportInterface::addUndefinedInlineKeyword](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUndefinedInlineKeyword.md) &ndash; Adds an undefined keyword (defined with the [keyword inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [ReportInterface::addUndefinedInlineClass](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUndefinedInlineClass.md) &ndash; Adds an undefined class (defined with the [class inline function](https://github.com/lingtalfi/DocTools/blob/master/doc/pages/doctool-markup-language.md#inline-functions)).
    - [ReportInterface::addUnresolvedImplementationTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUnresolvedImplementationTag.md) &ndash; an unresolved @implementation tag.
    - [ReportInterface::addUnresolvedOverridesTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUnresolvedOverridesTag.md) &ndash; an unresolved @overrides tag.
    - [ReportInterface::addClassWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addClassWithoutComment.md) &ndash; Adds the name of a class which doesn't have a non-empty doc comment.
    - [ReportInterface::addMethodWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addMethodWithoutComment.md) &ndash; Adds the name and the visibility of a method which doesn't have a non-empty doc comment.
    - [ReportInterface::addMethodWithoutReturnTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addMethodWithoutReturnTag.md) &ndash; Adds the name of a method which doesn't have a "@return" tag.
    - [ReportInterface::addPropertyWithoutComment](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addPropertyWithoutComment.md) &ndash; Adds the name and the visibility of a property which doesn't have a non-empty doc comment.
    - [ReportInterface::addPropertyWithoutVarTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addPropertyWithoutVarTag.md) &ndash; Adds the name of a property which doesn't have a "@var" tag specified.
    - [ReportInterface::addParameterWithoutParamTag](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addParameterWithoutParamTag.md) &ndash; Adds the name of a property (and method) which doesn't have a "@param" tag specified.
    - [ReportInterface::addUnresolvedClassReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUnresolvedClassReference.md) &ndash; Adds an unresolved class reference.
    - [ReportInterface::addUnresolvedMethodReference](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addUnresolvedMethodReference.md) &ndash; Adds an unresolved method reference.
    - [ReportInterface::addClassWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addClassWithEmptyMainText.md) &ndash; Adds a class with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [ReportInterface::addPropertyWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addPropertyWithEmptyMainText.md) &ndash; Adds a property with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [ReportInterface::addMethodWithEmptyMainText](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/addMethodWithEmptyMainText.md) &ndash; Adds a method with an empty [main text](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Info/CommentInfo.md#the-doc-comment-structure).
    - [ReportInterface::__toString](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Report/ReportInterface/__toString.md) &ndash; Builds and returns the rendered report as a string.
- [TemplateWizard](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/TemplateWizard/TemplateWizard.md) &ndash; The TemplateWizard class.
    - [TemplateWizard::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/TemplateWizard/TemplateWizard/__construct.md) &ndash; Builds the TemplateWizard instance.
    - [TemplateWizard::hasInsert](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/TemplateWizard/TemplateWizard/hasInsert.md) &ndash; Returns whether an insert of the given $type exists.
    - [TemplateWizard::getInserts](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/TemplateWizard/TemplateWizard/getInserts.md) &ndash; Returns an array of inserts for the given $type.
- [MarkdownTranslatorInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Translator/MarkdownTranslatorInterface.md) &ndash; The MarkdownTranslatorInterface interface.
    - [MarkdownTranslatorInterface::translate](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Translator/MarkdownTranslatorInterface/translate.md) &ndash; and returns the result.
- [ParseDownTranslator](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Translator/ParseDownTranslator.md) &ndash; The MarkdownTranslatorInterface interface.
    - [ParseDownTranslator::translate](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Translator/ParseDownTranslator/translate.md) &ndash; and returns the result.
    - Parsedown::text &ndash; The text method
    - Parsedown::setBreaksEnabled &ndash; The setBreaksEnabled method
    - Parsedown::setMarkupEscaped &ndash; The setMarkupEscaped method
    - Parsedown::setUrlsLinked &ndash; The setUrlsLinked method
    - Parsedown::setSafeMode &ndash; The setSafeMode method
    - Parsedown::setStrictMode &ndash; The setStrictMode method
    - Parsedown::line &ndash; The line method
    - Parsedown::parse &ndash; The parse method
    - Parsedown::instance &ndash; The instance method
- [ClassMethodsWidget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget.md) &ndash; The ClassMethodsWidget class.
    - [ClassMethodsWidget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget/__construct.md) &ndash; Builds the ClassMethodsWidget instance.
    - [ClassMethodsWidget::setClassInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget/setClassInfo.md) &ndash; Sets the classInfo.
    - [ClassMethodsWidget::setGeneratedItemsToUrl](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget/setGeneratedItemsToUrl.md) &ndash; Sets the generatedItems2Url.
    - [ClassMethodsWidget::setReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget/setReport.md) &ndash; Sets the report.
    - [ClassMethodsWidget::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassMethods/ClassMethodsWidget/render.md) &ndash; Returns the rendered widget.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [ClassPropertiesWidget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassProperties/ClassPropertiesWidget.md) &ndash; The ClassPropertiesWidget class.
    - [ClassPropertiesWidget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassProperties/ClassPropertiesWidget/__construct.md) &ndash; Builds the ClassPropertiesWidget instance.
    - [ClassPropertiesWidget::setClassInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassProperties/ClassPropertiesWidget/setClassInfo.md) &ndash; Sets the classInfo.
    - [ClassPropertiesWidget::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassProperties/ClassPropertiesWidget/render.md) &ndash; Returns the rendered widget.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [ClassSynopsisWidget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget.md) &ndash; The ClassSynopsisWidget class.
    - [ClassSynopsisWidget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget/__construct.md) &ndash; Builds the ClassSynopsisWidget instance.
    - [ClassSynopsisWidget::setGeneratedItems2Url](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget/setGeneratedItems2Url.md) &ndash; Sets the generatedItems2Url.
    - [ClassSynopsisWidget::setReport](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget/setReport.md) &ndash; Sets the report.
    - [ClassSynopsisWidget::setClassInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget/setClassInfo.md) &ndash; Sets the classInfo.
    - [ClassSynopsisWidget::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/ClassSynopsis/ClassSynopsisWidget/render.md) &ndash; Returns the rendered widget.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [PlanetDependenciesSectionWidget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetDependenciesSection/PlanetDependenciesSectionWidget.md) &ndash; The PlanetDependenciesSectionWidget class.
    - [PlanetDependenciesSectionWidget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetDependenciesSection/PlanetDependenciesSectionWidget/__construct.md) &ndash; Builds the PlanetDependenciesSectionWidget instance.
    - [PlanetDependenciesSectionWidget::setPlanetInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetDependenciesSection/PlanetDependenciesSectionWidget/setPlanetInfo.md) &ndash; Sets the planet info.
    - [PlanetDependenciesSectionWidget::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetDependenciesSection/PlanetDependenciesSectionWidget/render.md) &ndash; Returns the rendered widget.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [PlanetTocListWidget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetTocList/PlanetTocListWidget.md) &ndash; This PlanetTocListWidget widget displays a list of each class of the planet and their methods.
    - [PlanetTocListWidget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetTocList/PlanetTocListWidget/__construct.md) &ndash; Builds the PlanetTocListWidget instance.
    - [PlanetTocListWidget::setPlanetInfo](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetTocList/PlanetTocListWidget/setPlanetInfo.md) &ndash; Sets the planet info.
    - [PlanetTocListWidget::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/PlanetTocList/PlanetTocListWidget/render.md) &ndash; Returns the rendered widget.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
- [Widget](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget.md) &ndash; A base widget that every widget can extend.
    - [Widget::__construct](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/__construct.md) &ndash; Builds the Widget instance.
    - [Widget::setOptions](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/Widget/setOptions.md) &ndash; Sets the options for this widget instance.
    - [WidgetInterface::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface/render.md) &ndash; Returns the rendered widget.
- [WidgetInterface](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface.md) &ndash; The interface for all DocTools widgets.
    - [WidgetInterface::render](https://github.com/lingtalfi/DocTools/blob/master/doc/api/DocTools/Widget/WidgetInterface/render.md) &ndash; Returns the rendered widget.


Dependencies
============
- [Universe: Bat](https://github.com/karayabin/universe-snapshot/tree/master/universe/Bat)
- [Universe: TokenFun](https://github.com/karayabin/universe-snapshot/tree/master/universe/TokenFun)
- [Universe: DirScanner](https://github.com/karayabin/universe-snapshot/tree/master/universe/DirScanner)
- [Universe: UniverseTools](https://github.com/karayabin/universe-snapshot/tree/master/universe/UniverseTools)
- [Universe: ArrayToString](https://github.com/karayabin/universe-snapshot/tree/master/universe/ArrayToString)
- [Universe: ArrayToTable](https://github.com/karayabin/universe-snapshot/tree/master/universe/ArrayToTable)
- [Universe: ZeusTemplateEngine](https://github.com/karayabin/universe-snapshot/tree/master/universe/ZeusTemplateEngine)
- [Universe: ParseDown](https://github.com/karayabin/universe-snapshot/tree/master/universe/ParseDown)


History Log
==============


- 1.0.0 -- 2019-02-22

    - initial commit