echo "Initializing Laravel Code Challenge..."

echo "Installing PHP dependencies..."
composer install

if [ ! -f .env ]; then
  echo "Copying .env file..."
  cp .env.example .env
fi

echo "Generating app key..."
php artisan key:generate

echo "Setting folder permissions..."
chmod -R 775 storage bootstrap/cache

# Step 5: Run migrations
echo "Running database migrations..."
php artisan migrate

# Step 6: Install and build frontend assets
echo "Installing Node dependencies..."
npm install
echo "Building frontend..."
npm run dev
