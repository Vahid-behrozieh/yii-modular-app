<?php

class WeatherService extends \yii\base\Component implements WeatherServiceInterface
{
    private $dataFetcher;
    private $dataParser;

    public function __construct(WeatherDataFetcherInterface $dataFetcher, WeatherDataParserInterface $dataParser, $config = [])
    {
        $this->dataFetcher = $dataFetcher;
        $this->dataParser = $dataParser;
        parent::__construct($config);
    }

    public function getWeatherData($location)
    {
        $rawData = $this->dataFetcher->fetch($location);
        return $this->dataParser->parse($rawData);
    }
}