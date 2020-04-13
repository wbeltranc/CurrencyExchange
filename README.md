# Module Currency Exchange
``beltranc/module-currencyexchange``



 - [Descripción](#markdown-header-descripcion)
 - [Instalacion](#markdown-header-instalacion)
 - [Configuracion](#markdown-header-configuration)
 - [Especificaciones](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


### Descripcion
Modulo para realizar una consulta del dato oportuno de la serie SF43718, el cual devuelve el tiipo de cambio Pesos por dólar, desde la API de Banxico.

## Instalacion
\* = in production please use the `--keep-generated` option

### 1: Archivo zip

 - Descomprima el archivo zip en `app/code/BeltranC`
 - Habilite el módulo ejecutando `php bin/magento module:enable BeltranC_CurrencyExchange`
 - Aplicar actualizaciones de la base de datos ejecutando `php bin/magento setup:upgrade`\*
 - Vacíe el caché ejecutando `php bin/magento cache:flush`

### 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require beltranc/module-currencyexchange`
 - enable the module by running `php bin/magento module:enable BeltranC_CurrencyExchange`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration

 - Enable (dollarconvertion/general/enable)


## Specifications

 - Helper
	- BeltranC\CurrencyExchange\Helper\Data


## Attributes




### Dcoumentacion y Token de la API
El API del Sistema de Información Económica permite consultar las series de tiempo de todos los indicadores disponibles en este repositorio. Esta herramienta está orientada a desarrolladores o analistas que requieren la automatización del proceso de extracción de información económica publicada por el Banco de México.

Para utilizar el API se requiere usar el protocolo TLS 1.2

[Documentación](https://www.banxico.org.mx/SieAPIRest/service/v1/)

[Token](https://www.banxico.org.mx/SieAPIRest/service/v1/token)

