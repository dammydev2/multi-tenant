Welcome to the multi-tenant wiki!

### Multi Tenant Laravel application

-   install docker
-   clone the app
-   Copy .env.example
-   Start docker and go to Settings ==> Resources ==> file sharing and add path (you may hit apply and restart)
-   Open your terminal and run **docker compose up**
-   Once docker is up run **ddocker exec -it Serve sh** to SH into docker terminal
-   run **php artisan migrate && php artisan db:seed** on the docker terminal to seed super admin
-   go to **{baseUrl}/super-admin** to login to super admin portal
-   Use the credentials: super_admin@gmail.com as email and password: password

> Please note that phpmyadmin is already installed too so you can fire it up from the docker container

-   Once you register a company (tenant) from the base url, a DB is created for the tenant (tenant . $name e,g if name = foo then DB is tenantfoo), a url is also generated for the tenant immediately it will be foo.baseurl
