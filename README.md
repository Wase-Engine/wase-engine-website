[![Wase Engine logo banner](http://wase-engine.com/img/banner.png)](https://wase-engine.com/)

[![Website badge](https://img.shields.io/website?up_message=online&url=https%3A%2F%2Fwase-engine.com%2F)](https://wase-engine.com/)
[![Discord badge](https://img.shields.io/discord/864845724444393472?label=discord)](https://discord.gg/2RBMMxMJ7R)
[![Mit License badge](https://img.shields.io/apm/l/vim-mode)](https://github.com/JelleVos1/wase-engine/blob/master/LICENSE)
[![Issues badge](https://img.shields.io/github/issues/JelleVos1/wase-engine-website)](https://github.com/JelleVos1/wase-engine-website/issues)
![Lines badge](https://img.shields.io/tokei/lines/github/JelleVos1/wase-engine-website)
![Stars badge](https://img.shields.io/github/stars/JelleVos1/wase-engine-website?style=social)

This repository contains the website source code for the [Wase Engine](https://github.com/JelleVos1/wase-engine) repository. 

## Requirements
- PHP 8.0 or higher
- Composer
- Symfony
- Yarn
- NPM

## Setting up the website

To run the website on your local environment you will need to create an .env file in the project root and add the following lines to it:
```
APP_ENV=dev
APP_SECRET=
```

After this you will have to run the following commands:
```
composer install
yarn
yarn build
git submodule init
git submodule update
```

To start the server you can use `symfony server:start`
