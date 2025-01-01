<?php

class WeatherDataFetcher implements WeatherDataFetcherInterface
{
    public function fetch($location)
    {
        // درخواست به API برای دریافت داده‌ها
        // فرض بر این که از Yii2 HttpClient استفاده می‌کنیم
        $response = Yii::$app->httpClient->get("https://api.weatherapi.com/v1/current.json", [
            'key' => 'your_api_key',
            'q' => $location
        ])->send();

        if ($response->isOk) {
            return $response->data;
        }

        throw new \Exception("Unable to fetch weather data.");
    }
}