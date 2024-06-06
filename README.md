<p align="center">
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
