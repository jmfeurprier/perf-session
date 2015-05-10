<?php

namespace perf\Session;

/**
 *
 *
 */
class SessionWrapper
{

    /**
     *
     *
     * @return bool
     */
    public function start()
    {
        return session_start();
    }

    /**
     *
     *
     * @param string $name
     * @return string
     */
    public function setName($name)
    {
        return session_name($name);
    }

    /**
     *
     *
     * @return string
     */
    public function getName()
    {
        return session_name();
    }

    /**
     *
     *
     * @param string $id
     * @return string
     */
    public function setId($id)
    {
        return session_id($id);
    }

    /**
     *
     *
     * @return string
     */
    public function getId()
    {
        return session_id();
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
     * @return bool
     */
    public function regenerateId($deleteOldSession = false)
    {
        return session_regenerate_id($deleteOldSession);
    }

    /**
     *
     *
     * @return void
     */
    public function unsetSession()
    {
        session_unset();
    }
}
