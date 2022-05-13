* Русская версия панели <a href="https://github.com/pterodactyl/panel">Pterodactyl<a>.
* На панель версии 1.х.х можно поставить только 1 перевод! Учтите это!

Что бы поставить перевод - нужно:
```console
# Удалит папку с англиском языком
rm -rf /var/www/pterodactyl/resourses/lang/
# Удалит папку со страницами панели
rm -rf /var/www/pterodactyl/resourses/views/
# Зайти в нужную папку
cd /var/www/pterodactyl/resources/
# Скачает перевод
curl -Lo ru.zip https://github.com/Mr666dd/Russian-Pterodactyl-1.7.0.git
# Разархивирует zip
unzip ru.zip
# Зайти в нужную папку
cd /var/www/pterodactyl/
# Очистить кэш
php artisan view:clear
```
  
Учтите, что перевод может не встать (сделайте копию панели)!
