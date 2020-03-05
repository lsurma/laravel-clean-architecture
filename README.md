# Onion/clean architecture approach for Laravel based application
Warning! This project IS NOT guideline for others. It's just playground for implementing more maintainable design principles, into Laravel based apps.


## Project structure
```
project
└─── /domain (domain layer)
|    | Enterprise/business logic. Entities, classes, data structures etc. Ideally independent of framework, just plain php classes.
|    | Should not depend on other layers
|
└─── /app (application layer)
|    | "Meat" of application. Best choice would be to organize code into DDD-based directories.
|    |
|    └─── /Common
|         All code from Laravel base app structure is moved here. This is place for commons classes, models etc.
|
└─── /architecture (architecture layer)
|    | "Concrete" implementations of abstract classes, interfaces etc. External services.
|    |
|    └─── /Persistence
|         Here is place for data access/persistence layer of our application. Ideally repository pattern, registered via Laravel service provider. 
|
└─── /presentation (UI/Presentation layer)
|    | Place for code related with public, interactive side of our application.
|    | Here should be API endpoints, WebUIs and all other "front-end" stuff 
|    |
|    └─── /WebUI (main/default user interface)
|         Registered as service provider, consist of own views, controllers, langs, resources and assets
...
└─── rest of laravel default project structure
...

```

### Trade-offs 
Laravel and its packages/ecosystem is tightly based on Eloquent ORM. To prepare "real" clean architecture, with other design principles like repository pattern, we should not depend on Eloquent models in any layer except architecutre layer (Eloquent persistence repositories). That would lead to reinventing many parts of our application, and frameworks "goodies", so i personally don't feel it's good approach. 
Before starting new project, we should pick framework and tools adequate to needs, project size etc. If we need full decoupling layers/dependecies/parts of our application, then maybe we should pick other framework, or other ORM.
Nonetheless in my opinion, presented here structure will be big step forward to more maintainable Laravel project structure.

### Links
- https://lorisleiva.com/conciliating-laravel-and-ddd/
- https://mattdoescode.com/articles/scaling-laravel-architecture-2018-11-09
- https://jasontaylor.dev/clean-architecture-getting-started/