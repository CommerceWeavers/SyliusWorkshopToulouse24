# SyliusAwesomePlugin - ToulouseWorkshop

[![Latest Version on Packagist](https://img.shields.io/packagist/v/acme/sylius-awesome-plugin.svg?style=flat-square)](https://packagist.org/packages/acme/sylius-awesome-plugin)
[![Total Downloads](https://img.shields.io/packagist/dt/acme/sylius-awesome-plugin.svg?style=flat-square)](https://packagist.org/packages/acme/sylius-awesome-plugin)  

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

1. Run `composer install -n`.

2. Import routes
    ```yaml
    # config/routes/sylius_shop.yaml

    acme_sylius_awesome_shop:
        resource: "@AcmeSyliusAwesomePlugin/config/shop_routing.yaml"
        prefix: /{_locale}
        requirements:
            _locale: ^[A-Za-z]{2,4}(_([A-Za-z]{4}|[0-9]{3}))?(_([A-Za-z]{2}|[0-9]{3}))?$

    # config/routes/sylius_admin.yaml

    acme_sylius_awesome_admin:
        resource: "@AcmeSyliusAwesomePlugin/config/admin_routing.yml"
        prefix: /admin
    ```

3. Import configuration
    ```yaml
    # config/packages/_sylius.yaml

    imports:
    # ...
    - { resource: "@AcmeSyliusAwesomePlugin/config/config.yaml" }
    ```

4. Apply migrations
    ```bash
    bin/console doctrine:migrations:migrate
    ```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [All Contributors](../../contributors)

## License

Please see the [License File](LICENSE.md) for more information about licensing.

<p align="center">
    <a href="https://sylius.com" target="_blank">
        <picture>
          <img alt="Sylius Logo" src="https://media.sylius.com/sylius-logo-800.png" height="100">
        </picture>
    </a>
    <a href="https://commerceweavers.com" target="_blank">
        <picture>
          <img alt="CW Logo" height="100" src="https://github.com/CommerceWeavers/SyliusWorkshopWarsaw24/blob/main/assets/images/cw-logo.png?raw=true">
        </picture>
    </a>
</p>

<h1 align="center">Sylius Workshop Toulouse 24'</h1>

<p align="center">This is repository for Sylius Plugin Masterclass workshop that took place in Toulouse on 6th of June 2024</p>

## Installation

### Traditional
```bash
composer install -n
make setup
make serve
open http://localhost:8000/
```

For more detailed instruction please visit [installation chapter in our docs](https://docs.sylius.com/en/latest/book/installation/installation.html).

### Docker

#### Development

Make sure you have installed [Docker](https://docs.docker.com/get-docker/) on your local machine.
Execute `make init` in your favorite terminal and wait some time until the services will be ready.
Then enter `localhost` in your browser or execute `open localhost` in your terminal.
