Welcome to the multi-tenant wiki!

### Multi Tenant Laravel application

-   install docker
-   clone the app
-   Copy .env.example
-   Start docker and go to Settings ==> Resources ==> file sharing and add path (you may hit apply and restart)
-   Open your terminal and run **docker compose up**

> Please note that phpmyadmin is already installed too so you can fire it up from the docker container

-   Once you register a company (tenant) from the base url, a DB is created for the tenant (tenant . $name e,g if name = foo then DB is tenantfoo), a url is also generated for the tenant immediately it will be foo.baseurl
