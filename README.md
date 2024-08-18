# SwissQRBill-Generator

## Overview
The **SwissQRBill-Generator** is a PHP-based application designed to generate Swiss QR bills. It utilizes the [mPDF](https://mpdf.github.io/) library to create PDF documents that conform to Swiss payment standards, making it easy for businesses and individuals to generate and distribute QR bills.

## Features
- **Generate Swiss QR Bills**: Create compliant QR bills with all necessary information, such as payment amount, creditor, and debtor details.
- **PDF Output**: Generate high-quality PDF documents ready for printing and distribution.
- **Simple Form Interface**: A user-friendly interface to input the necessary details for QR bill generation.

## Prerequisites
- **PHP 7.0 or higher**: Ensure that PHP is installed on your server or local environment.
- **Composer**: Dependency management for PHP.

## Installation

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/saideekshitha/SwissQRBill-Generator.git
    ```

2. **Navigate to the Project Directory:**
    ```bash
    cd SwissQRBill-Generator
    ```

3. **Install Dependencies:**
    Ensure that Composer is installed, and then run the following command to install the necessary PHP libraries:
    ```bash
    composer install
    ```
    This will install the `mpdf/mpdf` library as specified in the `composer.json` file.

## Usage

1. **Access the Form Interface:**
    - Open the `form.php` file in your web browser. This will provide you with a form where you can input the necessary details for the QR bill.

2. **Generate the QR Bill:**
    - After filling out the form, submit it. The `formaction.php` script will process the data and generate a PDF file containing the Swiss QR bill.

3. **Download/Save the PDF:**
    - Once generated, the PDF file can be downloaded or saved directly from the browser.

## Files

- `form.php`: The main form interface for inputting QR bill details.
- `formaction.php`: The script that handles form submissions and generates the QR bill using mPDF.
- `composer.json`: The Composer configuration file that manages the project's dependencies.

## Dependencies

- **mpdf/mpdf** (version ^6.1): A PHP library that provides a simple way to create PDF files from HTML and CSS.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contributing
Contributions are welcome! Please feel free to submit a Pull Request.

## Contact
For any questions or suggestions, please contact [Your Name](mailto:your.email@example.com).
