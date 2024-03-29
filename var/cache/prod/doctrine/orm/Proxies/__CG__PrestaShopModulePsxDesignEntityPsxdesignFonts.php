<?php

namespace Proxies\__CG__\PrestaShop\Module\PsxDesign\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PsxdesignFonts extends \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'id', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'variableName', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'variableType', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'font', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'style', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'size', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'themeName'];
        }

        return ['__isInitialized__', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'id', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'variableName', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'variableType', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'font', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'style', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'size', '' . "\0" . 'PrestaShop\\Module\\PsxDesign\\Entity\\PsxdesignFonts' . "\0" . 'themeName'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PsxdesignFonts $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getVariableName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariableName', []);

        return parent::getVariableName();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariableName(string $variableName): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariableName', [$variableName]);

        return parent::setVariableName($variableName);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariableType(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariableType', []);

        return parent::getVariableType();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariableType(string $variableType): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariableType', [$variableType]);

        return parent::setVariableType($variableType);
    }

    /**
     * {@inheritDoc}
     */
    public function getFont(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFont', []);

        return parent::getFont();
    }

    /**
     * {@inheritDoc}
     */
    public function setFont(string $font): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFont', [$font]);

        return parent::setFont($font);
    }

    /**
     * {@inheritDoc}
     */
    public function getStyle(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStyle', []);

        return parent::getStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setStyle(string $style): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStyle', [$style]);

        return parent::setStyle($style);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize(int $size): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getThemeName(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThemeName', []);

        return parent::getThemeName();
    }

    /**
     * {@inheritDoc}
     */
    public function setThemeName(string $themeName): \PrestaShop\Module\PsxDesign\Entity\PsxdesignFonts
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThemeName', [$themeName]);

        return parent::setThemeName($themeName);
    }

    /**
     * {@inheritDoc}
     */
    public function toArray(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', []);

        return parent::toArray();
    }

}
