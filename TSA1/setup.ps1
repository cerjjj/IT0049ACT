$ErrorActionPreference = 'Stop'

if (-not (Test-Path -LiteralPath 'vendor/autoload.php')) {
    composer install
}

$sqliteLoaded = php -m | Select-String -SimpleMatch 'sqlite3'
$phpArgs = @()
if (-not $sqliteLoaded) {
    $phpArgs = @('-d', 'extension=sqlite3')
}

php @phpArgs spark migrate
php @phpArgs spark db:seed DatabaseSeeder

Write-Host 'Setup complete. Start the app with:'
Write-Host 'php -d extension=sqlite3 -S 127.0.0.1:8080 -t public development-router.php'
