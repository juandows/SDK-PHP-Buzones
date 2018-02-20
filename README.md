# Getting started

Buzones para envios de mensajes en Redyser

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=API%20Buzones-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the APIBuzones library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=API%20Buzones-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=API%20Buzones-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=API%20Buzones-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=API%20Buzones-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=API%20Buzones-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=API%20Buzones-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=API%20Buzones-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=API%20Buzones-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=API%20Buzones-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=API%20Buzones-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=API%20Buzones-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=API%20Buzones-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### 

API client can be initialized as following.

```php

$client = new APIBuzonesLib\APIBuzonesClient();
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [MessagesController](#messages_controller)
* [GruposController](#grupos_controller)
* [BoxesController](#boxes_controller)
* [ApplicationsController](#applications_controller)

## <a name="messages_controller"></a>![Class: ](https://apidocs.io/img/class.png ".MessagesController") MessagesController

### Get singleton instance

The singleton instance of the ``` MessagesController ``` class can be accessed from the API Client.

```php
$messages = $client->getMessages();
```

### <a name="get_unnammed_endpoint_get"></a>![Method: ](https://apidocs.io/img/method.png ".MessagesController.getUnnammedEndpointGet") getUnnammedEndpointGet

> *Tags:*  ``` Skips Authentication ``` 

> TODO: Add Description


```php
function getUnnammedEndpointGet()
```

#### Example Usage

```php

$messages->getUnnammedEndpointGet();

```


### <a name="update_applications_iris2_boxes_juande_mc_messages5a0d6278c1371500112e5dde_patch"></a>![Method: ](https://apidocs.io/img/method.png ".MessagesController.updateApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddePatch") updateApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddePatch

> *Tags:*  ``` Skips Authentication ``` 

> Modifica uno o variso de los campos: borrado, leido o consultado.


```php
function updateApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddePatch(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiJ1c2VyLl9pZCIsInVzZXJuYW1lIjoidXNlci51c2VybmFtZSIsImFkbWluIjoidXNlci5hZG1pbiIsImlhdCI6MTUxMzg0NTg2MywiZXhwIjoxNTE0NDUwNjYzLCJpc3MiOiJyZWR5c2VyLmNvbSIsInN1YiI6InVzZXJJbmZvIn0.tZTpGJa9o0jsjxJNeuiREquYDiskr3dkfCDPpsewwk8';
$bodyValue = "\n{\n\n    \"leido\": true,\n\n    \"borrado\": false\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $messages->updateApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddePatch($token, $body, $contentType);

```


### <a name="get_applications_iris2_boxes_juande_mc_messages5a0d6278c1371500112e5dde_get"></a>![Method: ](https://apidocs.io/img/method.png ".MessagesController.getApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddeGet") getApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddeGet

> *Tags:*  ``` Skips Authentication ``` 

> Devuelve el mensaje (123456) del buzón (juande.mc) de la aplicación (iris2).


```php
function getApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddeGet($token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJfaWQiOiJ1c2VyLl9pZCIsInVzZXJuYW1lIjoidXNlci51c2VybmFtZSIsImFkbWluIjoidXNlci5hZG1pbiIsImlhdCI6MTUxMzg0NTg2MywiZXhwIjoxNTE0NDUwNjYzLCJpc3MiOiJyZWR5c2VyLmNvbSIsInN1YiI6InVzZXJJbmZvIn0.tZTpGJa9o0jsjxJNeuiREquYDiskr3dkfCDPpsewwk8';

$result = $messages->getApplicationsIris2BoxesJuandeMcMessages5a0d6278c1371500112e5ddeGet($token);

```


### <a name="create_applications_iris2_boxes_juandemc_messages_post"></a>![Method: ](https://apidocs.io/img/method.png ".MessagesController.createApplicationsIris2BoxesJUANDEMCMessagesPost") createApplicationsIris2BoxesJUANDEMCMessagesPost

> *Tags:*  ``` Skips Authentication ``` 

> Crea un nuevo mensaje en el buzón (juande.mc) de la aplicación (iris2).


```php
function createApplicationsIris2BoxesJUANDEMCMessagesPost(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTg2MDM2NjF9.z_F1iok_-d4RTtjoGzUYFYC1V7DTtP339nofkaA_Y7Y';
$bodyValue = "\n{\n\n    \"leido\": false,\n\n    \"borrado\": false,\n\n    \"data\":{\n\n        \"type\" : \"url\",\n\n        \"url\" : \"http://www.redyser.com\"\n\n    },\n\n    \"expireAt\": \"2018-03-12T08:05:57.982Z\"\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $messages->createApplicationsIris2BoxesJUANDEMCMessagesPost($token, $body, $contentType);

```


### <a name="get_applications_iris2_boxes_juandemc_messages_get"></a>![Method: ](https://apidocs.io/img/method.png ".MessagesController.getApplicationsIris2BoxesJUANDEMCMessagesGet") getApplicationsIris2BoxesJUANDEMCMessagesGet

> *Tags:*  ``` Skips Authentication ``` 

> 
> Devuelve todos los mensajes del buzón (juande.mc) de la aplicación (iris2). Acepta parametros en la url:
> 
> 
> borrado: true/false
> 
> 
> leido: true/false
> 
> 
> fecha: mensajes desde esa fecha (ej.-2017-01-21)
> 
> 
> skip: se salta ese número de documentos
> 
> 
> limit: número documentos máximo que devolverá
> 
> 
> order: (fecha/-fecha), ordena por ese campo


```php
function getApplicationsIris2BoxesJUANDEMCMessagesGet(
        $borrado,
        $fecha,
        $limit,
        $skip,
        $order,
        $token,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| borrado |  ``` Required ```  | TODO: Add a parameter description |
| fecha |  ``` Required ```  | TODO: Add a parameter description |
| limit |  ``` Required ```  | TODO: Add a parameter description |
| skip |  ``` Required ```  | TODO: Add a parameter description |
| order |  ``` Required ```  | TODO: Add a parameter description |
| token |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$borrado = false;
$fecha = 2017-11-15;
$limit = 20;
$skip = 0;
$order = '-fecha';
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTgwNzg2MjF9.P1Jry3Mu1g4xaHhUsE7cYtTkczeg5mup3E5uKPUP0Ps';
$contentType = 'application/json';

$result = $messages->getApplicationsIris2BoxesJUANDEMCMessagesGet($borrado, $fecha, $limit, $skip, $order, $token, $contentType);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="grupos_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GruposController") GruposController

### Get singleton instance

The singleton instance of the ``` GruposController ``` class can be accessed from the API Client.

```php
$grupos = $client->getGrupos();
```

### <a name="create_groups5a564715825d4f0e94946c1a_applications_iris2_messages_post2"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.createGroups5a564715825d4f0e94946c1aApplicationsIris2MessagesPost2") createGroups5a564715825d4f0e94946c1aApplicationsIris2MessagesPost2

> *Tags:*  ``` Skips Authentication ``` 

> Crea un nuevo mensaje en los buzones de los usuarios(group) de la aplicación (iris2).


```php
function createGroups5a564715825d4f0e94946c1aApplicationsIris2MessagesPost2(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTM2MTI1OTAsInN0ciI6InN0ciIsImludCI6MSwiaXNzIjoicmVkeXNlci5jb20iLCJib29sIjp0cnVlfQ.f3t0DAv5eqd47UBsnQ3e4AZvnup9vSlvZB-iBjvegIo';
$bodyValue = "\n{\n\n  \"leido\": false,\n\n  \"borrado\": false,\n\n  \"data\":{\n\n    \"type\" : \"recogidas_pendientes\",\n\n    \"numero\" : 7\n\n  }\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $grupos->createGroups5a564715825d4f0e94946c1aApplicationsIris2MessagesPost2($token, $body, $contentType);

```


### <a name="update_groups_applications_iris2_groupname_todos_patch"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.updateGroupsApplicationsIris2GroupnameTodosPatch") updateGroupsApplicationsIris2GroupnameTodosPatch

> *Tags:*  ``` Skips Authentication ``` 

> Modifica uno o variso de los campos.


```php
function updateGroupsApplicationsIris2GroupnameTodosPatch(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';
$bodyValue = "\n{\n\n    \"nombre\": \"Informática\",\n\n    \"aplicacion\": \"iris2\",\n\n    \"usuarios\": [\n\n        \"JUANDE.MC\",\n\n        \"SCORDOBA\"\n\n    ]\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $grupos->updateGroupsApplicationsIris2GroupnameTodosPatch($token, $body, $contentType);

```


### <a name="get_groups_applications_iris2_groupname_todos_get"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.getGroupsApplicationsIris2GroupnameTodosGet") getGroupsApplicationsIris2GroupnameTodosGet

> *Tags:*  ``` Skips Authentication ``` 

> Devuelve el grupo (123456).


```php
function getGroupsApplicationsIris2GroupnameTodosGet($token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';

$result = $grupos->getGroupsApplicationsIris2GroupnameTodosGet($token);

```


### <a name="update_groups5a564715825d4f0e94946c1a_patch"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.updateGroups5a564715825d4f0e94946c1aPatch") updateGroups5a564715825d4f0e94946c1aPatch

> *Tags:*  ``` Skips Authentication ``` 

> Modifica uno o variso de los campos.


```php
function updateGroups5a564715825d4f0e94946c1aPatch(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';
$bodyValue = "\n{\n\n    \"nombre\": \"Informática\",\n\n    \"aplicacion\": \"iris2\",\n\n    \"usuarios\": [\n\n        \"JUANDE.MC\",\n\n        \"SCORDOBA\"\n\n    ]\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $grupos->updateGroups5a564715825d4f0e94946c1aPatch($token, $body, $contentType);

```


### <a name="get_groups_applications_iris2_get"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.getGroupsApplicationsIris2Get") getGroupsApplicationsIris2Get

> *Tags:*  ``` Skips Authentication ``` 

> 
> Devuelve todos los grupos de la aplicación. Acepta parametros en la url:
> 
> 
> skip: se salta ese número de documentos
> 
> 
> limit: número documentos máximo que devolverá


```php
function getGroupsApplicationsIris2Get(
        $borrado,
        $fecha,
        $limit,
        $skip,
        $token,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| borrado |  ``` Required ```  | TODO: Add a parameter description |
| fecha |  ``` Required ```  | TODO: Add a parameter description |
| limit |  ``` Required ```  | TODO: Add a parameter description |
| skip |  ``` Required ```  | TODO: Add a parameter description |
| token |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$borrado = false;
$fecha = 2017-11-15;
$limit = 20;
$skip = 0;
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';
$contentType = 'application/json';

$result = $grupos->getGroupsApplicationsIris2Get($borrado, $fecha, $limit, $skip, $token, $contentType);

```


### <a name="get_groups5a564715825d4f0e94946c1a_get"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.getGroups5a564715825d4f0e94946c1aGet") getGroups5a564715825d4f0e94946c1aGet

> *Tags:*  ``` Skips Authentication ``` 

> Devuelve el grupo (123456).


```php
function getGroups5a564715825d4f0e94946c1aGet($token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';

$result = $grupos->getGroups5a564715825d4f0e94946c1aGet($token);

```


### <a name="create_groups_post"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.createGroupsPost") createGroupsPost

> *Tags:*  ``` Skips Authentication ``` 

> Crea un nuevo grupo.


```php
function createGroupsPost(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTc5Mzk5NDd9.-pLDemUYmYPpjG5CZ7VI7UUBcC8mC_KAbEyNpzHsTMw';
$bodyValue = "\n{\n\n    \"nombre\": \"Informática\",\n\n    \"aplicacion\": \"iris2\",\n\n    \"usuarios\":[\"JUANDE.MC\", \"SCORDOBA\"]\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $grupos->createGroupsPost($token, $body, $contentType);

```


### <a name="get_groups_get"></a>![Method: ](https://apidocs.io/img/method.png ".GruposController.getGroupsGet") getGroupsGet

> *Tags:*  ``` Skips Authentication ``` 

> 
> Devuelve todos los grupos. Acepta parametros en la url:
> 
> 
> skip: se salta ese número de documentos
> 
> 
> limit: número documentos máximo que devolverá


```php
function getGroupsGet(
        $borrado,
        $fecha,
        $limit,
        $skip,
        $token,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| borrado |  ``` Required ```  | TODO: Add a parameter description |
| fecha |  ``` Required ```  | TODO: Add a parameter description |
| limit |  ``` Required ```  | TODO: Add a parameter description |
| skip |  ``` Required ```  | TODO: Add a parameter description |
| token |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$borrado = false;
$fecha = 2017-11-15;
$limit = 20;
$skip = 0;
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTU2NzUxNTJ9.94eDQR7Rn8sUblFCaGzoEC1XxbS8XGYtFhgGzslrzKU';
$contentType = 'application/json';

$result = $grupos->getGroupsGet($borrado, $fecha, $limit, $skip, $token, $contentType);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="boxes_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BoxesController") BoxesController

### Get singleton instance

The singleton instance of the ``` BoxesController ``` class can be accessed from the API Client.

```php
$boxes = $client->getBoxes();
```

### <a name="get_applications_iris2_boxes_get"></a>![Method: ](https://apidocs.io/img/method.png ".BoxesController.getApplicationsIris2BoxesGet") getApplicationsIris2BoxesGet

> *Tags:*  ``` Skips Authentication ``` 

> Devuelve todos los buzones que tienen mensajes de la aplicación (iris2).


```php
function getApplicationsIris2BoxesGet($token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTc5Mzk5NDd9.-pLDemUYmYPpjG5CZ7VI7UUBcC8mC_KAbEyNpzHsTMw';

$boxes->getApplicationsIris2BoxesGet($token);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="applications_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ApplicationsController") ApplicationsController

### Get singleton instance

The singleton instance of the ``` ApplicationsController ``` class can be accessed from the API Client.

```php
$applications = $client->getApplications();
```

### <a name="create_applications_iris2_messages_post"></a>![Method: ](https://apidocs.io/img/method.png ".ApplicationsController.createApplicationsIris2MessagesPost") createApplicationsIris2MessagesPost

> *Tags:*  ``` Skips Authentication ``` 

> Crea un nuevo mensaje en los buzones de los usuarios(group) de la aplicación (iris2).


```php
function createApplicationsIris2MessagesPost(
        $token,
        $body,
        $contentType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |
| contentType |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTc5Mzk5NDd9.-pLDemUYmYPpjG5CZ7VI7UUBcC8mC_KAbEyNpzHsTMw';
$bodyValue = "\n{\n\n  \"leido\": false,\n\n  \"borrado\": false,\n\n  \"data\":{\n\n    \"type\" : \"recogidas_pendientes\",\n\n    \"numero\" : 7\n\n  }\n\n}";
$body = APIHelper::deserialize($bodyValue);
$contentType = 'application/json';

$result = $applications->createApplicationsIris2MessagesPost($token, $body, $contentType);

```


### <a name="get_applications_get"></a>![Method: ](https://apidocs.io/img/method.png ".ApplicationsController.getApplicationsGet") getApplicationsGet

> *Tags:*  ``` Skips Authentication ``` 

> Devuelve todas las aplicaciones que tienen mensajes.


```php
function getApplicationsGet($token)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| token |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$token = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE1MTY4NzUwMDN9.2Eo8_bhTyLVywxi4P2zTSQ86WLXwCMdneJdmygeClaw';

$result = $applications->getApplicationsGet($token);

```


[Back to List of Controllers](#list_of_controllers)



