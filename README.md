# Module Currency Exchange
``beltranc/currencyexchange``



 - [Descripción](#descripcion)
 - [Instalacion](#instalacion)
 - [Docoumentacion y Token de la API](#docoumentacion-y-token-de-la-api)


## Descripcion
Modulo para realizar una consulta del dato oportuno de la serie SF43718, el cual devuelve el tiipo de cambio Pesos por dólar, desde la API de Banxico.

## Instalacion
\* = en producción, utilice la opción `--keep-generated`

### 1: Archivo zip

 - Descomprima el archivo zip en `app/code/BeltranC`
 - Habilite el módulo ejecutando `php bin/magento module:enable BeltranC_CurrencyExchange`
 - Aplicar actualizaciones de la base de datos ejecutando `php bin/magento setup:upgrade`\*
 - Vacíe el caché ejecutando `php bin/magento cache:flush`

### 2: Composer

 - Instale el módulo ejecutando `composer require beltranc/currencyexchange`
 - Habilite el módulo ejecutando `php bin/magento module:enable BeltranC_CurrencyExchange`
 - Aplique actualizaciones de la base de datos ejecutando `php bin/magento setup:upgrade`\*
 - Vacíe el caché ejecutando `php bin/magento cache:flush`


## Docoumentacion y Token de la API
El API del Sistema de Información Económica permite consultar las series de tiempo de todos los indicadores disponibles en este repositorio. Esta herramienta está orientada a desarrolladores o analistas que requieren la automatización del proceso de extracción de información económica publicada por el Banco de México.

Para utilizar el API se requiere usar el protocolo TLS 1.2

[Documentación](https://www.banxico.org.mx/SieAPIRest/service/v1/)

[Token](https://www.banxico.org.mx/SieAPIRest/service/v1/token)



