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
     * @param string $id
     * @return string
     */
    public function id($id = null)
    {
        if (null === $id) {
            return session_id();
        }

        return session_id($id);
    }

    /**
     *
     *
     * @param null|string $name
     * @return string
     */
    public function name($name = null)
    {
        if (null === $name) {
            return session_name();
        }

        return session_name($name);
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
