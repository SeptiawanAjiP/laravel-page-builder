# Laravel + GrapeJS Project

![image](https://raw.githubusercontent.com/SeptiawanAjiP/laravel-page-builder-duniacoding/master/img-1.png)

This is an open-source project that combines the power of Laravel and GrapeJS to create a web-based landing page generator.

## Table of Contents

- [Features](#features)
- [Getting Started](#getting-started)
- [Installation](#installation)
- [Usage](#usage)

![image](https://raw.githubusercontent.com/SeptiawanAjiP/laravel-page-builder-duniacoding/master/img-2.png)
## Features

- Web-based landing page generator.
- Integration of Laravel for backend functionalities.
- GrapeJS for visual page building.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.


## Installation

1. Clone the repository:

    ```bash
    https://github.com/SeptiawanAjiP/laravel-page-builder.git
    ```

2. Navigate to the project directory:

    ```bash
    cd your-project
    ```

3. Install PHP dependencies:

    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env` and configure your database:

    ```bash
    cp .env.example .env
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```
6. Create symlink

    ```bash
    php artisan storage:link
    ```

7. Migrate the database:

    ```bash
    php artisan migrate --seed
    ```

8. Start the development server:

    ```bash
    php artisan serve
    ```

### Usage

Visit `http://localhost:8000` in your browser to access the web-based landing page generator.