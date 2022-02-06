<?php

namespace ContainerQJUj0Ce;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder46f44 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer28b90 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties36523 = [
        
    ];

    public function getConnection()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getConnection', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getMetadataFactory', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getExpressionBuilder', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'beginTransaction', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getCache', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getCache();
    }

    public function transactional($func)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'transactional', array('func' => $func), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'wrapInTransaction', array('func' => $func), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'commit', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->commit();
    }

    public function rollback()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'rollback', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getClassMetadata', array('className' => $className), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'createQuery', array('dql' => $dql), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'createNamedQuery', array('name' => $name), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'createQueryBuilder', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'flush', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'clear', array('entityName' => $entityName), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->clear($entityName);
    }

    public function close()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'close', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->close();
    }

    public function persist($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'persist', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'remove', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'refresh', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'detach', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'merge', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getRepository', array('entityName' => $entityName), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'contains', array('entity' => $entity), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getEventManager', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getConfiguration', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'isOpen', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getUnitOfWork', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getProxyFactory', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'initializeObject', array('obj' => $obj), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'getFilters', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'isFiltersStateClean', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'hasFilters', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return $this->valueHolder46f44->hasFilters();
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

        $instance->initializer28b90 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder46f44) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder46f44 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder46f44->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__get', ['name' => $name], $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        if (isset(self::$publicProperties36523[$name])) {
            return $this->valueHolder46f44->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46f44;

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

        $targetObject = $this->valueHolder46f44;
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
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46f44;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder46f44;
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
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__isset', array('name' => $name), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46f44;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder46f44;
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
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__unset', array('name' => $name), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder46f44;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder46f44;
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
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__clone', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        $this->valueHolder46f44 = clone $this->valueHolder46f44;
    }

    public function __sleep()
    {
        $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, '__sleep', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;

        return array('valueHolder46f44');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer28b90 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer28b90;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer28b90 && ($this->initializer28b90->__invoke($valueHolder46f44, $this, 'initializeProxy', array(), $this->initializer28b90) || 1) && $this->valueHolder46f44 = $valueHolder46f44;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder46f44;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder46f44;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
