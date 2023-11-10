<?php declare(strict_types=1);


namespace ADanMei\Date;


class UtilDate
{
    const YMD = 'Y-m-d';
    const YMDHIS = 'Y-m-d H:i:s';
    const YMDHM = 'Y-m-d H:i';
    const YMDH = 'Y-m-d H';
    const YMD_SLASH = 'Y/m/d';
    const YMDHIS_SLASH = 'Y/m/d H:i:s';
    const YMDHM_SLASH = 'Y/m/d H:i';

    public function getYMDDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMD);
        }
        return $date;
    }

    public function getYMDHisDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMDHIS);
        }
        return $date;
    }

    public function getYMDHmDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMDHM);
        }
        return $date;
    }

    public function getYMDHDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMDH);
        }
        return $date;
    }

    public function getYMDSlashDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMD_SLASH);
        }
        return $date;
    }

    public function getYMDHisSlashDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMDHIS_SLASH);
        }
        return $date;
    }

    public function getYMDHmSlashDate($date = null) : mixed
    {
        if (empty($date)) {
            $date = date(self::YMDHM_SLASH);
        }
        return $date;
    }

}