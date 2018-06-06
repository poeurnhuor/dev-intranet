<?php

namespace App\Helpers;

class Setting
{

    protected $settings;

    /**
     * Setting constructor.
     * @param null $settingResult
     */
    public function __construct($settingResult = null)
    {
        $this->settings = $settingResult;
    }

    protected function filterByName($name)
    {
        $settings = $this->settings->toArray();

        $return = array_filter($settings, function ($row) use ($name) {
            return $row['name'] == $name;
        });

        reset($return);
        $first_key = key($return);

        if(!isset($return[$first_key]['value'])) {
            return null;
        }

        return $return[$first_key];
    }


    public function get($name)
    {
        return $this->filterByName($name)['value'];
    }

}