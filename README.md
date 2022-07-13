# HTML Parser pet project

Allows to parse web-url html elements without using DOM. Written in plain PHP.

## Setup

**Prerequisites**: you will need Docker & Docker-compose in order to set up the project.

1. Checkout code from git - `git clone https://github.com/pavel-vasiluk/php-html-parser.git`
2. Spin-up docker containers by running `docker-compose up`
3. Then proceed to `php` container in order to continue project setup - `docker exec -it --user root php /bin/bash`
4. Run `composer install` in order to install project dependencies
5. Make sure everything is up - project should start being available at http://localhost:8000

## Parser usage instruction

1. Proceed to http://localhost:8000/ and enter web-url to parse (e.g. https://phptherightway.com/)
2. Press `Submit`
3. You should see `Parsed HTML elements`table with element -> count data
4. Try to test parser with providing a non-url (invalid) input - you should get an error

That's it!