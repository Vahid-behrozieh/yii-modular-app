<?php

class WeatherDataParser implements WeatherDataParserInterface
{
    public function parse($data)
    {
        // پردازش و تبدیل داده‌های خام به فرمتی قابل استفاده
        return [
            'temperature' => $data['current']['temp_c'],
            'condition' => $data['current']['condition']['text'],
            'icon' => $data['current']['condition']['icon'],
        ];
    }
}