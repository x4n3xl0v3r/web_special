<?php

namespace ContainerV3TNxrw;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder39b9c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer79338 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e408 = [
        
    ];

    public function getConnection()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getConnection', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getMetadataFactory', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getExpressionBuilder', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'beginTransaction', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getCache', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'transactional', array('func' => $func), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'commit', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->commit();
    }

    public function rollback()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'rollback', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getClassMetadata', array('className' => $className), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'createQuery', array('dql' => $dql), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'createNamedQuery', array('name' => $name), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'createQueryBuilder', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'flush', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'clear', array('entityName' => $entityName), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->clear($entityName);
    }

    public function close()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'close', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->close();
    }

    public function persist($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'persist', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'remove', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'refresh', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'detach', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'merge', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'contains', array('entity' => $entity), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getEventManager', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getConfiguration', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'isOpen', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getUnitOfWork', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getProxyFactory', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'initializeObject', array('obj' => $obj), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'getFilters', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'isFiltersStateClean', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'hasFilters', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return $this->valueHolder39b9c->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer79338 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder39b9c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder39b9c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder39b9c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__get', ['name' => $name], $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        if (isset(self::$publicProperties5e408[$name])) {
            return $this->valueHolder39b9c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b9c;

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

        $targetObject = $this->valueHolder39b9c;
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
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b9c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder39b9c;
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
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__isset', array('name' => $name), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b9c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder39b9c;
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
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__unset', array('name' => $name), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder39b9c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder39b9c;
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
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__clone', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        $this->valueHolder39b9c = clone $this->valueHolder39b9c;
    }

    public function __sleep()
    {
        $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, '__sleep', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;

        return array('valueHolder39b9c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer79338 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer79338;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer79338 && ($this->initializer79338->__invoke($valueHolder39b9c, $this, 'initializeProxy', array(), $this->initializer79338) || 1) && $this->valueHolder39b9c = $valueHolder39b9c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder39b9c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder39b9c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
