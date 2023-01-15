#task
• We need to create a CRUD To-do list with user tasks and status of every task
• We need to preview the to-do list with WEBSOCKET (Real Time Preview)
➢ Authentication with dashboard containing:
id
title
desc
status (CANCELLED - INPROGRESS - COMPLETED - HOLD)
created-at
updated-at
• changing status, delete or update will affect in To-do list preview

# BaseModule
first just you need to do composer update then do php artisan migrate --seed
create directory public/upload/media
table users using engine myisam to use full text search

in front list users has input for search in (name, email, phone) just write and enter

still working on this project to make it perfect

1-restructure framework to work as modules mean that every module has its own (controllers, models, views, middlewars, migrations, service providers, routs).
2-auth web and api using jwt-auth

3-admin can (create update delete list) users.

4-admin can block users and change status for users pending to active.

5-facade to handle all uploads dynamic just send request without do any thing and it will working fine upload all(images, videos, docs, Pdf, Logos, avatars) and handle all sizes in .env using spatie-media.

6-about permissions used spatie-permission, permissions added from seeders and admins can create any role and assign any permissions to it and assign this role to any user.

7- handle crm-admin this user has all permissions without assign any permissions.

8- requests validations seperated to handel all requests.

9-every user has its own profile and can update its own data if he has permissions.

used solid, hmvc, design patterns and repository design pattern, controllers just call service , service has logic, service call repository ,repo manage all connections with database and every service and repo has its own interfaces and abstraction to restrict everything and used solid principles in all modules, classes and functions.
