# Laravel 9 & React js 

## Video


https://github.com/Sazib-Ahmed/GreenFoot--Laravel-Project/assets/87452465/21a2e5b2-ecb6-4346-a8aa-1322c9598615


## Screenshots

![preview img](/preview.png)
![preview img](/preview1.png)
![preview img](/preview2.png)

## What did we do?
    - Developed GreenFoot, a carbon footprint checker, and tracker, with an eco-friendly e-commerce platform promoting sustainable products.

## How did we do it?
    - Implemented a barcode scanning feature to allow users to check the carbon footprint of products easily.
    - Created a tracking system for users to monitor their daily activities contributing to carbon emissions.
    - Enabled carbon offsetting by allowing users to donate 30 BDT per kg of emitted carbon, directing the funds towards tree planting and other carbon capture projects.
    - Provided eco-friendly alternatives and suggestions for reducing carbon emissions when scanning product barcodes.
    - Established partnerships with eco-friendly vendors and allowed producers to advertise their environment-friendly goods.

## What was the impact?
    - Empowered users to make informed eco-friendly choices by checking the carbon footprint of products.
    - Enabled carbon offsetting, encouraging users to take responsibility for their carbon emissions and contribute to environmental conservation efforts.
    - Facilitated access to eco-friendly products that may be challenging to find in local stores, promoting sustainable consumption.
    - Raised awareness about the environmental impact of consumption choices and motivated positive changes in behavior.
    - Offered a sustainable business model that fosters environmental consciousness while providing practical solutions for consumers and vendors.

## Run Locally

Clone the project

```bash
  git clone https://github.com/Sazib-Ahmed/GreenFoot--Laravel-Project
```

Go to the project directory

```bash
  cd project-name
```

-   Copy .env.example file to .env and edit database credentials there

```bash
    composer install
```

```bash
    php artisan key:generate
```

```bash
    php artisan artisan migrate:fresh --seed
```

```bash
    php artisan storage:link
```

#### Login

-   email = admin@example.com
-   password = 123
