
SwissQRBill-Generator
Overview
The SwissQRBill-Generator is a PHP-based application designed to generate Swiss QR bills. It utilizes the mPDF library to create PDF documents that conform to the Swiss payment standards, allowing businesses and individuals to generate and distribute QR bills easily.

Features
Generate Swiss QR Bills: Create compliant QR bills with all necessary information, such as payment amount, creditor, and debtor details.
PDF Output: Generate high-quality PDF documents for easy printing and distribution.
Simple Form Interface: A user-friendly form interface to input the necessary details for QR bill generation.
Prerequisites
PHP 7.0 or higher: Ensure that PHP is installed on your server or local environment.
Composer: Used for dependency management in PHP.
Installation
Clone the Repository:
bash
Copy code
git clone https://github.com/saideekshitha/SwissQRBill-Generator.git
Navigate to the Project Directory:
bash
Copy code
cd SwissQRBill-Generator
Install Dependencies:
Ensure that Composer is installed, and then run the following command to install the necessary PHP libraries:
bash
Copy code
composer install
This will install the mpdf/mpdf library as specified in the composer.json file.
Usage
Access the Form Interface:
Open the form.php file in your web browser. This will provide you with a form where you can input the necessary details for the QR bill.
Generate the QR Bill:
After filling out the form, submit it. The formaction.php script will process the data and generate a PDF file containing the Swiss QR bill.
Download/Save the PDF:
Once generated, the PDF file can be downloaded or saved directly from the browser.
Files
form.php: The main form interface for inputting QR bill details.
formaction.php: The script that handles form submissions and generates the QR bill using mPDF.
composer.json: The Composer configuration file that manages the project's dependencies.
Dependencies
mpdf/mpdf (version ^6.1): A PHP library that provides a simple way to create PDF files from HTML and CSS.
