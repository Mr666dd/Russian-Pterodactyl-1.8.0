* Русская версия панели <a href="https://github.com/pterodactyl/panel">Pterodactyl<a>.
* На панель версии 1.х.х можно поставить только 1 перевод! Учтите это!

Что бы поставить перевод - нужно:
```console
# Установка git
apt install git
cd "Папка панели"
# Удалит папку с англиском языком
rm -rf resources/lang/
# Удалит папку со страницами панели
rm -rf resources/views/
# Зайти в нужную папку
cd resources/
# Скачает перевод
git clone https://github.com/Mr666dd/Russian-Pterodactyl-1.8.0.git
# Разархивирует zip
unzip ru.zip
# Зайти в нужную папку
cd /var/www/pterodactyl/
# Очистить кэш
php artisan view:clear
```
  
Учтите, что перевод может не встать (сделайте копию панели)!
