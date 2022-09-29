<?php

namespace denbora\R_T_G_Services\Httpful;

use denbora\R_T_G_Services\Httpful\Handlers\MimeHandlerAdapter;

class Httpful {
    const VERSION = '0.3.0';

    private static $mimeRegistrar = array();
    private static $default = null;

    /**
     * @param string $mimeType
     * @param MimeHandlerAdapter $handler
     */
    public static function register($mimeType, MimeHandlerAdapter $handler)
    {
        self::$mimeRegistrar[$mimeType] = $handler;
    }

    /**
     * @param string $mimeType defaults to MimeHandlerAdapter
     * @return MimeHandlerAdapter
     */
    public static function get($mimeType = null)
    {
        if (isset(self::$mimeRegistrar[$mimeType])) {
            return self::$mimeRegistrar[$mimeType];
        }

        if (empty(self::$default)) {
            self::$default = new MimeHandlerAdapter();
        }

        return self::$default;
    }

    /**
     * Does this particular Mime Type have a parser registered
     * for it?
     * @param string $mimeType
     * @return bool
     */
    public static function hasParserRegistered($mimeType)
    {
        return isset(self::$mimeRegistrar[$mimeType]);
    }
}
