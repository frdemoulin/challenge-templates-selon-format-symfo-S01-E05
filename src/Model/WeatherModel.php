<?php

namespace App\Model;

class WeatherModel
{
    public static function getWeatherData()
    {
        return self::$weatherData;
    }

    public static function getWeatherByCityIndex($index = 0)
    {
        $cityData = self::$weatherData[$index];

        if(isset($cityData)) {
            return $cityData;
        }
        return false;
    }

    private static $weatherData = [
        [
            'city' => 'Paris',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 1,
                    'max' => 4,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 7,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 1,
                    'max' => 10,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
            ]
        ],
        [
            'city' => 'Marseille',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'fog'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 1,
                    'max' => 4,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 1,
                    'max' => 4,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 1,
                    'max' => 4,
                    'image' => 'hail'
                ],
            ]
        ],
        [
            'city' => 'Lyon',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'fog'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'fog'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'fog'
                ],
            ]
        ],
        [
            'city' => 'Toulouse',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 2,
                    'max' => 5,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Nice',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'hail'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'hail'
                ],
            ]
        ],
        [
            'city' => 'Nantes',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 4,
                    'max' => 6,
                    'image' => 'sun'
                ],
            ]
        ],
        [
            'city' => 'Strasbourg',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'clouds'
                ],
            ]
        ],
        [
            'city' => 'Montpellier',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'sun'
                ],
            ]
        ],
        [
            'city' => 'Bordeaux',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 2,
                    'max' => 8,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Lille',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
            ]
        ],
        [
            'city' => 'Rennes',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 10,
                    'image' => 'clouds'
                ],
            ]
        ],
        [
            'city' => 'Reims',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
            ]
        ],
        [
            'city' => 'Le Havre',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'rain-s'
                ],
            ]
        ],
        [
            'city' => 'Saint-Étienne',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Toulon',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'sun-rain'
                ],
            ]
        ],
        [
            'city' => 'Grenoble',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 12,
                    'image' => 'cloud-rain'
                ],
            ]
        ],
        [
            'city' => 'Dijon',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'cloudy'
                ],
            ]
        ],
        [
            'city' => 'Angers',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'sun'
                ],
            ]
        ],
        [
            'city' => 'Nîmes',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 6,
                    'max' => 15,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'rain-s'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 4,
                    'max' => 14,
                    'image' => 'rain-s'
                ],
            ]
        ],
        [
            'city' => 'Villeurbanne',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 3,
                    'max' => 16,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 6,
                    'max' => 15,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 6,
                    'max' => 15,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 6,
                    'max' => 15,
                    'image' => 'sun-rain'
                ],
            ]
        ],
        [
            'city' => 'Saint-Denis',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 3,
                    'max' => 16,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 3,
                    'max' => 16,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 3,
                    'max' => 16,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Le Mans',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'rain-l'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'sun-rain'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'sun-rain'
                ],
            ]
        ],
        [
            'city' => 'Clermont-Ferrand',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 7,
                    'max' => 18,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'rain-l'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'rain-l'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 8,
                    'max' => 17,
                    'image' => 'rain-l'
                ],
            ]
        ],
        [
            'city' => 'Aix-en-Provence',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 7,
                    'max' => 20,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 7,
                    'max' => 18,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 7,
                    'max' => 18,
                    'image' => 'cloud-rain'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 7,
                    'max' => 18,
                    'image' => 'cloud-rain'
                ],
            ]
        ],
        [
            'city' => 'Brest',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 7,
                    'max' => 20,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 7,
                    'max' => 20,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 7,
                    'max' => 20,
                    'image' => 'cloudy'
                ],
            ]
        ],
        [
            'city' => 'Limoges',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Tours',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'cloudy'
                ],
            ]
        ],
        [
            'city' => 'Amiens',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 10,
                    'max' => 22,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 10,
                    'max' => 21,
                    'image' => 'sun'
                ],
            ]
        ],
        [
            'city' => 'Perpignan',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 10,
                    'max' => 22,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 10,
                    'max' => 22,
                    'image' => 'cloudy-sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 10,
                    'max' => 22,
                    'image' => 'cloudy-sun'
                ],
            ]
        ],
        [
            'city' => 'Metz',
            'weather' => [
                [
                    'day' => '2017-04-20',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-21',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-22',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
                [
                    'day' => '2017-04-23',
                    'min' => 7,
                    'max' => 23,
                    'image' => 'sun'
                ],
            ]
        ]
    ];
}
