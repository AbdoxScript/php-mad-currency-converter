# PHP MAD Currency Converter

A modular PHP application that converts amounts from Moroccan Dirhams (MAD) to Euros (EUR), computes the total sum, and renders the results in an HTML summary table.

## Project Structure
* `index.php` — Entry point that configures input data, exchange rate constants, and coordinates execution.
* `conversion.php` — Handles currency conversion logic (`convertir()`).
* `somme.php` — Computes and formats the total converted sum (`calculerSomme()`).
* `affichage.php` — Renders the structured HTML output table (`afficherTableau()`).

## How to Run Locally
1. Copy the project folder into your local web server root (e.g., `C:\xampp\htdocs\php-mad-currency-converter`).
2. Start **Apache** in the XAMPP Control Panel.
3. Open `http://localhost/php-mad-currency-converter/` in your browser.

## Planned Improvements
* Add an HTML form (`$_POST`) to allow custom user amounts and multiple target currencies (EUR, USD, GBP).
* Separate numerical return types from display formatting (`number_format()`).
* Persist conversion history using PHP sessions or a MySQL database via PDO.
