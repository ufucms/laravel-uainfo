<?php

namespace Ufucms\LaravelUainfo;

use Ufucms\LaravelUainfo\External\Os;
use Ufucms\LaravelUainfo\External\Device;
use Ufucms\LaravelUainfo\External\Browser;
use Ufucms\LaravelUainfo\External\Language;

/**
 * 根据UA判断浏览器类型和版本，操作系统等
 * @package laravel-uainfo
 */
class Uainfo
{
    //获取全部ua信息
    public static function getAll()
    {
        $browser  = new Browser();
        $os       = new Os();
        $device   = new Device();
        $language = new Language();
        return [
            'browser'         => $browser->getName(),
            'browser_version' => $browser->getVersion(),
            'systems'         => $os->getName(),
            'systems_version' => $os->getVersion(),
            'device'          => $device->getName(),
            'language'        => $language->getLanguage(),
        ];
    }

    //获取所有语言信息
    public static function getLang()
    {
        $language = new Language();
        return [
            'lang'  => $language->getLanguage(),
            'langs' => $language->getLanguages(),
        ];
    }

    //获取操作系统信息
    public static function getSystem()
    {
        $os = new Os();
        return [
            'system'  => $os->getName(),
            'version' => $os->getVersion(),
        ];
    }

    //获取浏览器信息
    public static function getBrowser()
    {
        $browser = new Browser();
        return [
            'browser' => $browser->getName(),
            'version' => $browser->getVersion(),
        ];
    }

    //获取设备名称
    public static function getDevice()
    {
        $device = new Device();
        return $device->getName();
    }
}