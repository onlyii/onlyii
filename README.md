# onlyii
Yii2 CMS

Тестируем установку до публикации на https://packagist.org/packages/onlyii/onlyii

`composer create-project onlyii/onlyii htdocs-dev dev-master --remove-vcs --repository '{"type":"vcs","url":"git@github.com:onlyii/onlyii.git"}'`

# Установка

Вначале надо настроить окружение `production`, для этого 
сначала скопируйте `environments/dev/config/*` в `environments/prod/config/`,
затем заполните их корректными значениями, затем можно выполнить инициализацию:

`sudo -u www-data ./init --env=Production --overwrite=y`
ы