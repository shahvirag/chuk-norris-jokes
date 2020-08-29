# Chuk Norris Jokes

Create Chuk Norris Jokes in your nextphp project.

## Installation

Require package using composer:

```bash
composer require shahvirag/chuk-norris-jokes
```

## Usage

```php
use Shahvirag\ChukNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
