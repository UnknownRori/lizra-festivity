# Lizra Festivity

Lizra Festivity is a simple site for event organizer company to manage it's news, and blogs, probably in future it will have time management system to allows them to manage their time and automatic system to review the accepted contract.

## 🛠️ Development

### Requirements

- PHP x >= 8.2
- node x >= 18
- composer
- npm
- Database that supported by Laravel

[Penpot Design](https://design.penpot.app/#/view/82e31d90-3829-8139-8002-cefebb062880?page-id=82e31d90-3829-8139-8002-cefebb062881&section=interactions&index=0&share-id=82e31d90-3829-8139-8002-d3bb8e90e24b)

### Installation

```bash
# Clone the repository
git clone https://github.com/UnknownRori/lizra-festivity

# Change directory
cd lizra-festivity

# Copy enviroment file and configure it
cp .env.example .env
vim .env

# Install dependency
npm install
composer install

# Generate the key
php artisan key:generate

# Start the server
php artisan serve & npm run dev
```

Or using powershell

```powershell
# Clone the repository
git clone https://github.com/UnknownRori/lizra-festivity

# Change directory
cd lizra-festivity

# Copy enviroment file and configure it
COPY .env.example .env
notepad .env

# Install dependency
npm install
composer install

# Generate the key
php artisan key:generate

# Start the server
php artisan serve 

# Start another powershell
npm run dev
```

## 🚀 Usage

```bash
# If you have mprocs
mprocs

# If you don't have just start the server normaly
php artisan serve & npm run dev
```

## 🌟 Contribution

Feel free to contribute, send pull request or issue and i will take a look
