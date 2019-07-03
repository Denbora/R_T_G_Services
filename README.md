# Команди
`bin/console app:update-services-list` виконує обновлення списку доступних сервісів та методів з RTGWebAPI. 
Дані парсять з json, який можна помістити у файл `openAPI.json`, результат записуються `src/config/restMethodsV2.json`

`bin/console app:generate-services` створює сервіси з методами, а також класи з прикладами в `examples/RESTv2`, список
сервісів та їх методів зчитуються з `src/config/restMethodsV2.json`