<?php

namespace App\Controller;

use App\Model\WeatherModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WeatherController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function showHome()
    {
        return $this->render('weather/home.html.twig');
    }

    /**
     * @Route("/weather.{_format}", name="weather_show",
     * defaults={"_format": "html"}, requirements={"_format": "html|xml|json"})
     */
    public function showWeather(Request $request)
    {
        $format = $request->getRequestFormat();
        $weatherData = WeatherModel::getWeatherData();
        //dump($weatherData);

        switch ($format) {
            case 'html':
                return $this->render('weather/show_weather.html.twig', [
                    'weatherData' => $weatherData
                ]);
                break;
            case 'xml':
                /**
                 * *********************
                 * VERSION RESPONSE XML
                 * *********************
                 */
                
                 // on utilise le composant xml encoder de Symfony
                $encoder = new XmlEncoder();
                
                // on encode les données météo en XML
                $xmlWeatherData = $encoder->encode($weatherData, 'xml');

                // on retourne une réponse de type XML
                $response = new Response($xmlWeatherData);

                // on écrit dans les headers que l'on renvoie du XML
                $response->headers->set('Content-Type', 'application/xml');

                // on retourne la réponse HTTP au format XML
                return $response;

                /**
                 * *******************
                 * VERSION XML TWIG
                 * *******************
                 */

                // return $this->render('weather/show_weather.xml.twig', [
                //     'weatherData' => $weatherData
                // ]);
                break;
            case 'json':
                /**
                 * *******************
                 * VERSION JSON TWIG
                 * *******************
                 */
                return $this->render('weather/show_weather.json.twig', [
                    'weatherData' => $weatherData
                ]);
                /**
                 * *******************
                 * VERSION JSON
                 * *******************
                 */
                // return $this->json($weatherData);
                break;
        }
    }
}
