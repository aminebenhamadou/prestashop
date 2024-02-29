<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderde18d = null;
    private $initializer78d57 = null;
    private static $publicPropertiesfea60 = [
        
    ];
    public function getConnection()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getConnection', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getMetadataFactory', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getExpressionBuilder', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'beginTransaction', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getCache', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getCache();
    }
    public function transactional($func)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'transactional', array('func' => $func), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'commit', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->commit();
    }
    public function rollback()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'rollback', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getClassMetadata', array('className' => $className), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'createQuery', array('dql' => $dql), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'createNamedQuery', array('name' => $name), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'createQueryBuilder', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'flush', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'clear', array('entityName' => $entityName), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->clear($entityName);
    }
    public function close()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'close', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->close();
    }
    public function persist($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'persist', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'remove', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'refresh', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'detach', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'merge', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'contains', array('entity' => $entity), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getEventManager', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getConfiguration', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'isOpen', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getUnitOfWork', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getProxyFactory', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'initializeObject', array('obj' => $obj), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'getFilters', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'isFiltersStateClean', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'hasFilters', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return $this->valueHolderde18d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer78d57 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderde18d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderde18d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderde18d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__get', ['name' => $name], $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        if (isset(self::$publicPropertiesfea60[$name])) {
            return $this->valueHolderde18d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde18d;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderde18d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde18d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderde18d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__isset', array('name' => $name), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde18d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderde18d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__unset', array('name' => $name), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderde18d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderde18d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__clone', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        $this->valueHolderde18d = clone $this->valueHolderde18d;
    }
    public function __sleep()
    {
        $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, '__sleep', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
        return array('valueHolderde18d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78d57 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78d57;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer78d57 && ($this->initializer78d57->__invoke($valueHolderde18d, $this, 'initializeProxy', array(), $this->initializer78d57) || 1) && $this->valueHolderde18d = $valueHolderde18d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderde18d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderde18d;
    }
}
