# Pre-clean
rm -Rf generated
rm generated.zip

curl -X POST \
  https://generator3.swagger.io/api/generate \
  -H 'Content-Type: application/json' \
  -H 'cache-control: no-cache' \
  -d '{
    "options": {
        "packageName": "WuroPhpClient",
        "apiPackage": "Wuro",
        "variableNamingConvention": "snake_case",
        "invokerPackage": "Wuro\\Api",
        "composerVendorName": "e-monsite",
        "composerProjectName": "wuro-php-client",
		"gitUserId": "e-monsite",
		"gitRepoId": "wuro-php-client"
    },
    "lang": "php",
    "type": "CLIENT",
    "codegenVersion": "V3",
    "specURL": "https://raw.githubusercontent.com/e-monsite/wuro-php-client/master/wuro_oas3.json"
}' > generated.zip

unzip generated.zip -d generated/

# Remove old files
rm composer.json
rm phpunit.xml.dist
rm README.md
rm -Rf docs
rm -Rf lib
rm -Rf test

# Move file in root directory
cp -Rf generated/SwaggerClient-php/* .

# Post-clean
rm -Rf generated
rm generated.zip

# No use of git_push script, clean it
rm git_push.sh