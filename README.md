# Description
Description of methods and data structure for transmission - stored in `src/config/restMethodsV2.json`

# Commands
`bin/console app:update-services-list` Performs an update of the list of available services and methods from `Swager OpenAPI`. 
The data is parsed from json, which can be placed in `openAPI.json`, the result is written `src/config/restMethodsV2.json`

`bin/console app:generate-services` creates services with methods and examples for methods in `examples/RESTv2`,
a list services and their methods are read from `src/config/restMethodsV2.json`

`app:run-example <service> <method>` - `<service>` is the name of the service, `<method>` - is the name of the method the result of which we want to see.
To run the examples you need to add experiments to the tree
_experiments/config_project/creds/_ - with a certificate and a key
_experiments/config_project/links/config.json_ from JSON contains a link to the API `url.rest`, the name of the certificate file
`crt`, the name of the file with the key `key`, and the password `pass`