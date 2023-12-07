# Ultra-coder

Ultra-coder is a web application that manages user schedules and shifts. It is built with PHP, JavaScript, and CSS.

## Directory Structure

```
|-Root
  |-Public
    |-Assets
      |-Images
        |- Logo.png
        |- Background.jpg
      |-CSS
        |- Main.css
        |- Theme.css
      |-JS
        |- Main.js
        |- Helpers.js
    |-index.html
  |-Private
    |-Controllers
      |-User_Controller.php
      |-Schedule_Controller.php
      |-Shift_Controller.php
    |-Models
      |-User_Model.php
      |-Schedule_Model.php
      |-Shift_Model.php
    |-Views
      |-User_View.php
      |-Schedule_View.php
      |-Shift_View.php
  |-Config
    |-Database_Connect.php
  |-Vendor
    |-Third_Party_Library_1
    |-Third_Party_Library_2
  |-README.md
  |-composer.json
```

## Installation

1. Clone the repository to your local machine.
2. Navigate to the project root directory.
3. Run `composer install` to install all the dependencies.
4. Set up your database and update the `Database_Connect.php` file with your database credentials.
5. Start your local server and navigate to the `Public` directory in your browser.

## Usage

Open `index.html` in your browser to start using the application. You can register a new user, create schedules, and assign shifts.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

[MIT](https://choosealicense.com/licenses/mit/)