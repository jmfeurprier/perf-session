<?php

namespace perf\Session;

/**
 *
 *
 */
class SessionClient
{

    /**
     *
     *
     * @var SessionWrapper
     */
    private $wrapper;

    /**
     * Static constructor.
     *
     * @return SessionClient
     */
    public static function createDefault()
    {
        $wrapper = new SessionWrapper();

        return new self($wrapper);
    }

    /**
     * Static constructor.
     *
     * @param SessionWrapper $wrapper
     * @return SessionClient
     */
    public static function create(SessionWrapper $wrapper)
    {
        return new self($wrapper);
    }

    /**
     * Constructor.
     *
     * @param SessionWrapper $wrapper
     * @return void
     */
    private function __construct(SessionWrapper $wrapper)
    {
        $this->wrapper = $wrapper;
    }

    /**
     *
     *
     * @return void
     * @throws \RuntimeException
     */
    public function start()
    {
        if (!$this->wrapper->start()) {
            throw new \RuntimeException('Failed to start session.');
        }
    }

    /**
     *
     *
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        return $this->wrapper->name($name);
    }

    /**
     *
     *
     * @return string
     */
    public function getName()
    {
        return $this->wrapper->name();
    }

    /**
     *
     *
     * @param string $id
     * @return string
     */
    public function setId($id)
    {
        return $this->wrapper->id($id);
    }

    /**
     *
     *
     * @return string
     */
    public function getId()
    {
        return $this->wrapper->id();
    }

    /**
     *
     * @param string $var
     * @param mixed $value
     * @return void
     */
    public function set($var, $value)
    {
        $_SESSION[$var] = $value;
    }

    /**
     *
     *
     * @param string $var
     * @return bool
     */
    public function has($var)
    {
        return isset($_SESSION[$var]);
    }

    /**
     *
     *
     * @param string $var
     * @return mixed
     */
    public function get($var)
    {
        return $_SESSION[$var];
    }

    /**
     *
     *
     * @param string $var
     * @return void
     */
    public function remove($var)
    {
        unset($_SESSION[$var]);
    }

    /**
     *
     *
     * @param bool $deleteOldSession
     * @return void
     * @throws \RuntimeException
     */
    public function regenerateId($deleteOldSession = false)
    {
        if (!$this->wrapper->regenerateId($deleteOldSession)) {
            throw new \RuntimeException('Failed to regenerate session Id.');
        }
    }

    /**
     *
     *
     * @return void
     */
    public function unsetSession()
    {
        return $this->wrapper->unsetSession();
    }
}
