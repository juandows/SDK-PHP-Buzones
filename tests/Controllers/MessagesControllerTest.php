<?php
/*
 * APIBuzonesLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace APIBuzonesLib\Tests;

use APIBuzonesLib\APIException;
use APIBuzonesLib\Exceptions;
use APIBuzonesLib\APIHelper;
use APIBuzonesLib\Models;
use APIBuzonesLib\Utils\DateTimeHelper;

class MessagesControllerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \APIBuzonesLib\Controllers\MessagesController Controller instance
     */
    protected static $controller;

    /**
     * @var HttpCallBackCatcher Callback
     */
    protected $httpResponse;

    /**
     * Setup test class
     */
    public static function setUpBeforeClass()
    {
        $client = new \APIBuzonesLib\APIBuzonesClient();
        self::$controller = $client->getMessages();
    }

    /**
     * Setup test
     */
    protected function setUp()
    {
        $this->httpResponse = new HttpCallBackCatcher();
    }

    /**
     * TODO: Add Description
     */
    public function testUnnammedEndpoint11()
    {

        // Set callback and perform API call
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            self::$controller->getUnnammedEndpointGet();
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );
    }

    /**
     * Modifica uno o variso de los campos: borrado, leido o consultado.
     */
    public function testModificarUnMensajeLeidoBorrado1()
    {
        // Parameters for the API call
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiJ1c2VyLl9pZCIsInVzZXJuYW1lIjoidXNlci51c2VybmFtZSIsImFkbWluIjoidXNlci5hZG1pbiIsImlhdCI6MTUxMzg0NTg2MywiZXhwIjoxNTE0NDUwNjYzLCJpc3MiOiJyZWR5c2VyLmNvbSIsInN1YiI6InVzZXJJbmZvIn0.tZTpGJa9o0jsjxJNeuiREquYDiskr3dkfCDPpsewwk8';
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '\n{\n\n    "leido": true,\n\n    "borrado": false\n\n}'),
            'APIBuzonesLib\\Models\\ModificarUnMensajeLeidoBorradoRequest'
        );
        $contentType = 'application/json';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->updateApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddePatch($token, $body, $contentType);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertEquals(
            '\n{\n\n    "data": {\n\n        "id": "123456",\n\n        "leido": true,\n\n        "borrado": fals' .
                'e,\n\n        "fecha": "2017-10-20T15:59:45.000Z",\n\n        "data": {\n\n            "type": "inci' .
                'dencias_pregunta",\n\n            "referencia": "123456789"\n\n        }\n\n    }\n\n}',
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * Devuelve el mensaje (123456) del buzón (juande.mc) de la aplicación (iris2).
     */
    public function testLeerUnMensaje1()
    {
        // Parameters for the API call
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiJ1c2VyLl9pZCIsInVzZXJuYW1lIjoidXNlci51c2VybmFtZSIsImFkbWluIjoidXNlci5hZG1pbiIsImlhdCI6MTUxMzg0NTg2MywiZXhwIjoxNTE0NDUwNjYzLCJpc3MiOiJyZWR5c2VyLmNvbSIsInN1YiI6InVzZXJJbmZvIn0.tZTpGJa9o0jsjxJNeuiREquYDiskr3dkfCDPpsewwk8';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddeGet($token);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertEquals(
            '\n{\n\n    "data":{\n\n        "id": "123456",\n\n    "leido": false,\n\n    "borrado": false,\n\n  ' .
                '  "fecha": "2017-10-20T15:59:45.000Z",\n\n    "data": {\n\n        "type": "incidencias_pregunta",\n' .
                '\n        "referencia": "123456789"\n\n    }\n\n    }\n\n}',
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * Crea un nuevo mensaje en el buzón (juande.mc) de la aplicación (iris2).
     */
    public function testCrearUnMensaje1()
    {
        // Parameters for the API call
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTg2MDM2NjF9.z_F1iok_-d4RTtjoGzUYFYC1V7DTtP339nofkaA_Y7Y';
        $body = TestHelper::getJsonMapper()->mapClass(json_decode(
            '\n{\n\n    "leido": false,\n\n    "borrado": false,\n\n    "data":{\n\n        "type" : "url",\n\n  ' .
            '      "url" : "http://www.redyser.com"\n\n    },\n\n    "expireAt": "2018-03-12T08:05:57.982Z"\n\n}'),
            'APIBuzonesLib\\Models\\CrearUnMensajeRequest'
        );
        $contentType = 'application/json';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->createApplicationsIris2BoxesJUANDEMCMessagesPost($token, $body, $contentType);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertEquals(
            '\n{\n\n\n"data":\n\n        {\n\n            "id": "123456",\n\n            "leido": false,\n\n     ' .
                '       "borrado": false,\n\n            "fecha": "2017-10-20T15:59:45.000Z",\n\n            "data": ' .
                '{\n\n                "type": "incidencias_pregunta",\n\n                "referencia": "123456789"\n\' .
                'n            }\n\n        }\n\n}\n',
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }

    /**
     * 
Devuelve todos los mensajes del buzón (juande.mc) de la aplicación (iris2). Acepta parametros en la url:


borrado: true/false


leido: true/false


fecha: mensajes desde esa fecha (ej.-2017-01-21)


skip: se salta ese número de documentos


limit: número documentos máximo que devolverá


order: (fecha/-fecha), ordena por ese campo
     */
    public function testLeerMensajes1()
    {
        // Parameters for the API call
        $borrado = false;
        $fecha = DateTimeHelper::fromRfc3339DateTime('2017-11-15');
        $limit = 20;
        $skip = 0;
        $order = '-fecha';
        $token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTgwNzg2MjF9.P1Jry3Mu1g4xaHhUsE7cYtTkczeg5mup3E5uKPUP0Ps';
        $contentType = 'application/json';

        // Set callback and perform API call
        $result = null;
        self::$controller->setHttpCallBack($this->httpResponse);
        try {
            $result = self::$controller->getApplicationsIris2BoxesJUANDEMCMessagesGet($borrado, $fecha, $limit, $skip, $order, $token, $contentType);
        } catch (APIException $e) {
        }

        // Test response code
        $this->assertEquals(
            200,
            $this->httpResponse->getResponse()->getStatusCode(),
            "Status is not 200"
        );

        // Test whether the captured response is as we expected
        $this->assertNotNull($result, "Result does not exist");

        $this->assertEquals(
            '\n{\n\n    "data": [\n\n        {\n\n            "id": "123456",\n\n            "leido": false,\n\n ' .
                '           "borrado": false,\n\n            "fecha": "2017-10-20T15:59:45.000Z",\n\n            "dat' .
                'a": {\n\n                "type": "incidencias_pregunta",\n\n                "referencia": "123456789' .
                '"\n\n            }\n\n        },\n\n        {\n\n            "id": "123457",\n\n            "leido":' .
                ' false,\n\n            "borrado": false,\n\n            "fecha": "2017-10-20T16:59:45.000Z",\n\n    ' .
                '        "data": {\n\n                "type": "incidencias_pregunta",\n\n                "referencia"' .
                ': "123456789"\n\n            }\n\n        }\n\n    ]\n\n}',
            $this->httpResponse->getResponse()->getRawBody(),
            "Response body does not match exactly"
        );
    }
}
