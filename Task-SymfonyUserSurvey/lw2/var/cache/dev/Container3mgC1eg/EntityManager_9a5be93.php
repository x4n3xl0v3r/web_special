<?php

namespace Container3mgC1eg;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder04508 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3f708 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesbd750 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getConnection', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getMetadataFactory', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getExpressionBuilder', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'beginTransaction', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getCache', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'transactional', array('func' => $func), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'wrapInTransaction', array('func' => $func), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'commit', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->commit();
    }

    public function rollback()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'rollback', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getClassMetadata', array('className' => $className), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'createQuery', array('dql' => $dql), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'createNamedQuery', array('name' => $name), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'createQueryBuilder', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'flush', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'clear', array('entityName' => $entityName), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->clear($entityName);
    }

    public function close()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'close', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->close();
    }

    public function persist($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'persist', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'remove', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'refresh', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'detach', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'merge', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'contains', array('entity' => $entity), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getEventManager', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getConfiguration', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'isOpen', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getUnitOfWork', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getProxyFactory', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'initializeObject', array('obj' => $obj), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'getFilters', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'isFiltersStateClean', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'hasFilters', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return $this->valueHolder04508->hasFilters();
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

        $instance->initializer3f708 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder04508) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder04508 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder04508->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__get', ['name' => $name], $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        if (isset(self::$publicPropertiesbd750[$name])) {
            return $this->valueHolder04508->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04508;

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

        $targetObject = $this->valueHolder04508;
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
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04508;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder04508;
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
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__isset', array('name' => $name), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04508;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder04508;
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
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__unset', array('name' => $name), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04508;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder04508;
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
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__clone', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        $this->valueHolder04508 = clone $this->valueHolder04508;
    }

    public function __sleep()
    {
        $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, '__sleep', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;

        return array('valueHolder04508');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3f708 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3f708;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3f708 && ($this->initializer3f708->__invoke($valueHolder04508, $this, 'initializeProxy', array(), $this->initializer3f708) || 1) && $this->valueHolder04508 = $valueHolder04508;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04508;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04508;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
