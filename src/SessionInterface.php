<?php
/**
 * A SessionInterface
 *
 * @link        https://github.com/pavlakis/session
 * @copyright   Copyright © 2016 Antonis Pavlakis
 * @author      Antonis Pavlakis (@pavlakis)
 * @license     https://github.com/pavlakis/session/blob/master/LICENSE (MIT License)
 */
namespace Pavlakis\Http\SessionInterface;


interface SessionInterface
{

    /**
     * @return SessionInterface
     */
    public function start();

    /**
     * @return void
     */
    public function destroy();

    /**
     * @param bool $deleteOldSession
     * @return bool
     */
    public function regenerate($deleteOldSession = false);

    /**
     * @return bool
     */
    public static function isStarted();

    /**
     * @param string $name
     * @param $value
     * @return mixed
     */
    public function set($name, $value);

    /**
     * @param $name
     * @param mixed $default
     * @return mixed
     */
    public function get($name, $default = null);


    /**
     * @param $name
     * @return void
     */
    public function remove($name);

    /**
     * @param $name
     * @return bool
     */
    public function has($name);

    /**
     * @return array
     */
    public function getSessionArray();
}